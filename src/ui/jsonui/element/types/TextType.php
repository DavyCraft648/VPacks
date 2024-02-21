<?php

namespace vezdehod\packs\ui\jsonui\element\types;

use JsonSerializable;

enum TextType implements JsonSerializable {

	case EXTENDED_ASCII;
	case IDENTIFIER_CHARS;
	case NUMBER_CHARS;

    public function jsonSerialize(): string {
		return match ($this){
			self::EXTENDED_ASCII => "ExtendedASCII",
			self::IDENTIFIER_CHARS => "IdentifierChars",
			self::NUMBER_CHARS => "NumberChars"
		};
	}
}