<?php

namespace vezdehod\packs\ui\jsonui\button;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

enum MappingScope implements JsonSerializable {
    use JsonEnumTrait;

	case VIEW;
	case CONTROLLER;
}