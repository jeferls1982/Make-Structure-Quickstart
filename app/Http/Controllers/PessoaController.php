<?php

namespace App\Http\Controllers;

use App\Substructure\Managers\PessoaManager;
use App\Substructure\Repositories\PessoaRepository;
use Freelabois\LaravelQuickstart\Extendables\CrudController;
use Illuminate\Http\Client\Request;


class PessoaController extends CrudController
{
    public function __construct(
        PessoaManager    $manager,
        PessoaRepository $repository
    )
    {
        parent::__construct($manager, $repository);
    }
}
