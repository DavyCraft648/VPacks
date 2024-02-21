<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

enum FocusNavigationMode implements JsonSerializable {
    use JsonEnumTrait;

	case NONE;
	case STOP;
	case CUSTOM;
	case CONTAINED;
}