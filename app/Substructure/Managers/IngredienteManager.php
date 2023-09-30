<?php

namespace App\Substructure\Managers;

use App\Substructure\Repositories\IngredienteRepository;

class IngredienteManager extends BaseManager
{
    public function __construct(IngredienteRepository $repository)
    {
        $this->repository = $repository;
    }
}
