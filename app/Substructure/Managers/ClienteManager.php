<?php

namespace App\Substructure\Managers;

use App\Substructure\Repositories\ClienteRepository;

class ClienteManager extends BaseManager
{
    public function __construct(ClienteRepository $repository)
    {
        $this->repository = $repository;
    }
}
