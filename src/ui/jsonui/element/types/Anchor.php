<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;
use vezdehod\packs\utils\JsonEnumTrait;

/**
 * https://wiki.bedrock.dev/json-ui/json-ui-documentation.html#anchor-properties
 *
 * Anchors allows the elements to align to a certain point where position, size, scale, animations, etc will take as
 * the point for transformation. In JSON UI, there's two properties anchor_from and anchor_to that together achieve
 * this.
 */
enum Anchor implements JsonSerializable {

    use JsonEnumTrait;

	case TOP_LEFT;
	case TOP_MIDDLE;
	case TOP_RIGHT;
	case LEFT_MIDDLE;
	case CENTER;
	case RIGHT_MIDDLE;
	case BOTTOM_LEFT;
	case BOTTOM_MIDDLE;
	case BOTTOM_RIGHT;
}