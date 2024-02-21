<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;
use function strtolower;

/**
 * TODO: I think this should be registry, not hardcoded value since there is exists a way to use custom fonts
 */
enum FontType implements JsonSerializable {

    use JsonEnumTrait;

	case DEFAULT;
	case RUNE;
	case UNICODE;
	case SMOOTH;
	case MINECRAFTTEN;

	public function name(): string {
		return match($this){
			self::MINECRAFTTEN => "MinecraftTen",
			default => strtolower($this->name)
		};
	}
}