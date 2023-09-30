<?php

namespace App\Substructure\Managers;

use App\Substructure\Repositories\CategoriaHasImageRepository;

class CategoriaHasImageManager extends BaseManager
{
    public function __construct(CategoriaHasImageRepository $repository)
    {
        $this->repository = $repository;
    }
}
