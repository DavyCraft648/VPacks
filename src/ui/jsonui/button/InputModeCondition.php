<?php

namespace vezdehod\packs\ui\jsonui\button;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

enum InputModeCondition implements JsonSerializable {

    use JsonEnumTrait;

	case NOT_GAZE;
	case NOT_GAMEPAD;
	case GAMEPAD_AND_NOT_GAZE;
}