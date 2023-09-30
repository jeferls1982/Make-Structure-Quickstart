<?php

namespace App\Substructure\Managers;

use App\Substructure\Repositories\PessoaRepository;

class PessoaManager extends BaseManager
{
    public function __construct(PessoaRepository $repository)
    {
        $this->repository = $repository;
    }
}
