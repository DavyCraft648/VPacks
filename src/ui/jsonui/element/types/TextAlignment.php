<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

enum TextAlignment implements JsonSerializable {

    use JsonEnumTrait;

	case LEFT;
	case RIGHT;
	case CENTER;

    public function jsonSerialize(): string {
        return $this->name();
    }
}