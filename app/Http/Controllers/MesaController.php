<?php

namespace App\Http\Controllers;

use App\Substructure\Managers\MesaManager;
use App\Substructure\Repositories\MesaRepository;
use Freelabois\LaravelQuickstart\Extendables\CrudController;
use Illuminate\Http\Client\Request;


class MesaController extends CrudController
{
    public function __construct(
        MesaManager    $manager,
        MesaRepository $repository
    )
    {
        parent::__construct($manager, $repository);
    }
}
