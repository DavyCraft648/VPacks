<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

enum FocusChange implements JsonSerializable {

    use JsonEnumTrait;

	case FOCUS_OVERRIDE_STOP;

	public function name(): string {
		return "FOCUS_OVERRIDE_STOP";
	}
}