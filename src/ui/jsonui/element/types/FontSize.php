<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

enum FontSize implements JsonSerializable {

    use JsonEnumTrait;

	case SMALL;
	case NORMAL;
	case LARGE;
	case EXTRA_LARGE;
}