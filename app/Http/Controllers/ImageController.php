<?php

namespace App\Http\Controllers;

use App\Substructure\Managers\ImageManager;
use App\Substructure\Repositories\ImageRepository;
use Freelabois\LaravelQuickstart\Extendables\CrudController;
use Illuminate\Http\Client\Request;


class ImageController extends CrudController
{
    public function __construct(
        ImageManager    $manager,
        ImageRepository $repository
    )
    {
        parent::__construct($manager, $repository);
    }
}
