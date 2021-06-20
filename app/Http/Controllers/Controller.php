<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

abstract class Controller extends BaseController
{
    /**
     * Creates a new instance of the controller
     *
     * @param Request $request The request
     */
    public function __construct(protected Request $request)
    {
        //
    }
}
