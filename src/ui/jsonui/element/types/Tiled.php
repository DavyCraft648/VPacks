<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * TODO: It's seems like true and false as an enum element very bad idea for this?
 */
enum Tiled implements JsonSerializable {

    use JsonEnumTrait;

	case TRUE;
	case FALSE;
	case X;
	case Y;
}