<?php

namespace App\Http\Controllers;

use App\Substructure\Managers\IngredienteManager;
use App\Substructure\Repositories\IngredienteRepository;
use Freelabois\LaravelQuickstart\Extendables\CrudController;
use Illuminate\Http\Client\Request;


class IngredienteController extends CrudController
{
    public function __construct(
        IngredienteManager    $manager,
        IngredienteRepository $repository
    )
    {
        parent::__construct($manager, $repository);
    }
}
