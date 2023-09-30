<?php

namespace App\Http\Controllers;

use App\Substructure\Managers\PratoManager;
use App\Substructure\Repositories\PratoRepository;
use Freelabois\LaravelQuickstart\Extendables\CrudController;
use Illuminate\Http\Client\Request;


class PratoController extends CrudController
{
    public function __construct(
        PratoManager    $manager,
        PratoRepository $repository
    )
    {
        parent::__construct($manager, $repository);
    }
}
