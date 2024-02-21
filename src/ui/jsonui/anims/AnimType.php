<?php

namespace vezdehod\packs\ui\jsonui\anims;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

enum AnimType implements JsonSerializable {
    use JsonEnumTrait;

	case ALPHA;
	case CLIP;
	case COLOR;
	case FLIP_BOOK;
	case OFFSET;
	case SIZE;
	case UV;
	case WAIT;
	case ASEPRITE_FLIP_BOOK;
}