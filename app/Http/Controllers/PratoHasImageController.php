<?php

namespace App\Http\Controllers;

use App\Substructure\Managers\PratoHasImageManager;
use App\Substructure\Repositories\PratoHasImageRepository;
use Freelabois\LaravelQuickstart\Extendables\CrudController;
use Illuminate\Http\Client\Request;


class PratoHasImageController extends CrudController
{
    public function __construct(
        PratoHasImageManager    $manager,
        PratoHasImageRepository $repository
    )
    {
        parent::__construct($manager, $repository);
    }
}
