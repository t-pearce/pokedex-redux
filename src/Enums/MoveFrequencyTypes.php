<?php

namespace PtuDex\Enums;

class MoveFrequencyTypes extends \Engine\Abstracts\Enum
{
	const PREFIX    = "moveFrequencyTypes.";

	const AT_WILL   = "moveFrequencyTypes.at-will";
	const EOT       = "moveFrequencyTypes.eot";
	const SCENE     = "moveFrequencyTypes.scene";
	const DAILY     = "moveFrequencyTypes.daily";
	const SPECIAL   = "moveFrequencyTypes.special";
	const MF_STATIC = "moveFrequencyTypes.static";
}