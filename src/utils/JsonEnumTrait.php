<?php

namespace vezdehod\packs\utils;

use function strtolower;

trait JsonEnumTrait {

    public function jsonSerialize(): string { return $this->name(); }

    /**
     * TODO: remove this when schemas arrive
     */
    public static function fromString(string $raw): object {
	    /**
	     * @var self[]|null $map
	     * @phpstan-var array<string, self>|null $map
	     */
	    static $map = null;

	    if($map === null){
		    $map = [];
		    foreach(self::cases() as $case){
				$map[$case->name()] = $case;
		    }
	    }

	    return $map[$raw] ?? throw new \InvalidArgumentException();
    }

	public function name(): string {
		return strtolower($this->name);
	}
}