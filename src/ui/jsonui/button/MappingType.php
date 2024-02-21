<?php

namespace vezdehod\packs\ui\jsonui\button;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

enum MappingType implements JsonSerializable {

    use JsonEnumTrait;

	case GLOBAL;
	case PRESSED;
	case DOUBLE_PRESSED;
	case FOCUSSED;
}