<?php

namespace App\Http\Controllers;

use App\Substructure\Managers\CategoriaHasImageManager;
use App\Substructure\Repositories\CategoriaHasImageRepository;
use Freelabois\LaravelQuickstart\Extendables\CrudController;
use Illuminate\Http\Client\Request;


class CategoriaHasImageController extends CrudController
{
    public function __construct(
        CategoriaHasImageManager    $manager,
        CategoriaHasImageRepository $repository
    )
    {
        parent::__construct($manager, $repository);
    }
}
