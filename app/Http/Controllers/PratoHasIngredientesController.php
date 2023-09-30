<?php

namespace App\Http\Controllers;

use App\Substructure\Managers\PratoHasIngredientesManager;
use App\Substructure\Repositories\PratoHasIngredientesRepository;
use Freelabois\LaravelQuickstart\Extendables\CrudController;
use Illuminate\Http\Client\Request;


class PratoHasIngredientesController extends CrudController
{
    public function __construct(
        PratoHasIngredientesManager    $manager,
        PratoHasIngredientesRepository $repository
    )
    {
        parent::__construct($manager, $repository);
    }
}
