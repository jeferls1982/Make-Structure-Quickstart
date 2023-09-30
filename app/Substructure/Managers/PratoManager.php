<?php

namespace App\Substructure\Managers;

use App\Substructure\Repositories\PratoRepository;

class PratoManager extends BaseManager
{
    public function __construct(PratoRepository $repository)
    {
        $this->repository = $repository;
    }
}
