<?php

namespace App\Http\Controllers;

use App\Substructure\Managers\CategoriaManager;
use App\Substructure\Repositories\CategoriaRepository;
use Freelabois\LaravelQuickstart\Extendables\CrudController;
use Illuminate\Http\Client\Request;


class CategoriaController extends CrudController
{
    public function __construct(
        CategoriaManager    $manager,
        CategoriaRepository $repository
    )
    {
        parent::__construct($manager, $repository);
    }
}
