<?php

namespace App\Substructure\Managers;

use App\Substructure\Repositories\ImageRepository;

class ImageManager extends BaseManager
{
    public function __construct(ImageRepository $repository)
    {
        $this->repository = $repository;
    }
}
