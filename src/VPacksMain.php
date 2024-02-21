<?php

namespace vezdehod\packs;

use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use vezdehod\packs\pack\ResourcePackGenerator;
use vezdehod\packs\resource\ResourceManager;
use vezdehod\packs\ui\UIManager;
use vezdehod\packs\utils\JsonSerializer;
use function is_dir;
use function ksort;
use function str_ends_with;

class VPacksMain extends PluginBase {

    private UIManager $uiManager;
    private ResourceManager $resourceManager;

    protected function onLoad(): void {
        JsonSerializer::$production = str_ends_with($this->getFile(), ".phar") && !is_dir($this->getFile());

        $this->uiManager = new UIManager();
        $this->resourceManager = new ResourceManager();

        ContentFactory::setFactory(fn(Plugin $plugin) => new PluginContent(
            $plugin,
            $this->uiManager->fromPlugin($plugin),
            $this->resourceManager->fromPlugin($plugin),
        ));
    }

    protected function onEnable(): void {
        $contents = ContentFactory::getAndLock();

        //This is need to be sorted, because of PMMP random plugin loading to avoid alphabetical order depending
        //https://github.com/pmmp/PocketMine-MP/blob/2b61c025c26394c3293bcc12a2d0b2301cb4c7ee/src/plugin/PluginManager.php#L237
        ksort($contents);

        $generator = new ResourcePackGenerator($this->getDataFolder() . "autogenerated.zip", $this->getServer()->getMotd());


        $this->resourceManager->inject($generator, $contents);
        $this->uiManager->inject($generator, $contents);


        $pack = $generator->generate();

        $manager = $this->getServer()->getResourcePackManager();

        $currentResourcePacks = $manager->getResourceStack();
		$currentResourcePacks[] = $pack;
		$manager->setResourceStack($currentResourcePacks);

        $manager->setResourcePacksRequired(true);
    }
}