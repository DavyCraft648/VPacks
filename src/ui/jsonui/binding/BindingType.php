<?php

namespace vezdehod\packs\ui\jsonui\binding;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

enum BindingType implements JsonSerializable {
    use JsonEnumTrait;

	case GLOBAL;
	case VIEW;
	case COLLECTION;
	case COLLECTION_DETAILS;
	case NONE;
}