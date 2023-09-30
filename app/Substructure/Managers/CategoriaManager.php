<?php

namespace App\Substructure\Managers;

use App\Substructure\Repositories\CategoriaRepository;

class CategoriaManager extends BaseManager
{
    public function __construct(CategoriaRepository $repository)
    {
        $this->repository = $repository;
    }
}
