<?php

namespace App\Http\Controllers;

use App\Substructure\Managers\ReservaManager;
use App\Substructure\Repositories\ReservaRepository;
use Freelabois\LaravelQuickstart\Extendables\CrudController;
use Illuminate\Http\Client\Request;


class ReservaController extends CrudController
{
    public function __construct(
        ReservaManager    $manager,
        ReservaRepository $repository
    )
    {
        parent::__construct($manager, $repository);
    }
}
