<?php

namespace App\Http\Controllers;

use App\Substructure\Managers\ClienteManager;
use App\Substructure\Repositories\ClienteRepository;
use Freelabois\LaravelQuickstart\Extendables\CrudController;
use Illuminate\Http\Client\Request;


class ClienteController extends CrudController
{
    public function __construct(
        ClienteManager    $manager,
        ClienteRepository $repository
    )
    {
        parent::__construct($manager, $repository);
    }
}
