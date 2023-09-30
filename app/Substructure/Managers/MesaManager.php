<?php

namespace App\Substructure\Managers;

use App\Substructure\Repositories\MesaRepository;

class MesaManager extends BaseManager
{
    public function __construct(MesaRepository $repository)
    {
        $this->repository = $repository;
    }
}
