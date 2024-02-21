<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

enum ClipDirection implements JsonSerializable {
    use JsonEnumTrait;

	case UP;
	case DOWN;
	case LEFT;
	case RIGHT;
	case CENTER;
}