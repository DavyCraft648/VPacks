<?php

namespace vezdehod\packs\ui\jsonui\binding;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

enum BindingCondition implements JsonSerializable {

    use JsonEnumTrait;

	case ALWAYS;
	case ALWAYS_WHEN_VISIBLE;
	case VISIBLE;
	case ONCE;
	case NONE;
	case VISIBILITY_CHANGED;
}