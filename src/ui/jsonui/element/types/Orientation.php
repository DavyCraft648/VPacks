<?php

namespace vezdehod\packs\ui\jsonui\element\types;


use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

enum Orientation implements JsonSerializable {

    use JsonEnumTrait;

	case VERTICAL;
	case HORIZONTAL;
	case NONE;

    public function or(Orientation $orientation): Orientation {
        if ($this === self::NONE) {
            return $orientation;
        }
        return $this;
    }
}