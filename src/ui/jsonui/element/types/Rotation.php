<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

enum Rotation implements JsonSerializable {
    use JsonEnumTrait;

	case AUTO;
	case GESTURE_X;
	case CUSTOM_Y;
}