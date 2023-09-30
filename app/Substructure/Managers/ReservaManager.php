<?php

namespace App\Substructure\Managers;

use App\Substructure\Repositories\ReservaRepository;

class ReservaManager extends BaseManager
{
    public function __construct(ReservaRepository $repository)
    {
        $this->repository = $repository;
    }
}
