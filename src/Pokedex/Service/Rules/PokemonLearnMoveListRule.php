<?php

namespace PtuDex\Pokedex\Service\Rules;

use PtuDex\Common\Models\Pokemon;

class PokemonLearnMoveListRule extends Rule
{
	use \Engine\Traits\Creatable;
	
	/** @param Pokemon $model */
	public function apply(\Engine\Model\Model $model): bool
	{
		$move = \PtuDex\Common\Factories\MoveFactory::getInstance()
		->getMove($this->getValue());

		return $model->hasLearnMove($move);
	}
}