<?php

namespace vezdehod\packs\ui\jsonui\anims;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * https://easings.net/
 */
enum Easing implements JsonSerializable{
	use JsonEnumTrait;

	case LINEAR;
	case SPRING;
	case IN_QUAD;
	case OUT_QUAD;
	case IN_OUT_QUAD;
	case IN_CUBIC;
	case OUT_CUBIC;
	case IN_OUT_CUBIC;
	case IN_QUART;
	case OUT_QUART;
	case IN_OUT_QUART;
	case IN_QUINT;
	case OUT_QUINT;
	case IN_OUT_QUINT;
	case IN_SINE;
	case OUT_SINE;
	case IN_OUT_SINE;
	case IN_EXPO;
	case OUT_EXPO;
	case IN_OUT_EXPO;
	case IN_CIRC;
	case OUT_CIRC;
	case IN_OUT_CIRC;
	case IN_BOUNCE;
	case OUT_BOUNCE;
	case IN_OUT_BOUNCE;
	case IN_BACK;
	case OUT_BACK;
	case IN_ELASTIC;
	case OUT_ELASTIC;
	case IN_OUT_ELASTIC;
}