<?php

namespace App\Substructure\Managers;

use App\Substructure\Repositories\PratoHasIngredientesRepository;

class PratoHasIngredientesManager extends BaseManager
{
    public function __construct(PratoHasIngredientesRepository $repository)
    {
        $this->repository = $repository;
    }
}
