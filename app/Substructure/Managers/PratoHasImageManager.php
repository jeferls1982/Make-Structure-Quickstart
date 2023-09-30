<?php

namespace App\Substructure\Managers;

use App\Substructure\Repositories\PratoHasImageRepository;

class PratoHasImageManager extends BaseManager
{
    public function __construct(PratoHasImageRepository $repository)
    {
        $this->repository = $repository;
    }
}
