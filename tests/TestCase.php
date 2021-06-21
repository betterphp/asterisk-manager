<?php

declare(strict_types=1);

namespace Tests;

use Laravel\Lumen\Testing\TestCase as BaseTestCase;
use Laravel\Lumen\Application;

abstract class TestCase extends BaseTestCase
{
    /**
     * Creates the application.
     *
     * The framework seems to have the wrong param type on the parent class
     * @phan-suppress PhanParamSignatureMismatch
     *
     * @return Application
     */
    public function createApplication()
    {
        require_once __DIR__ . "/../bootstrap/app.php";

        return \createApp();
    }
}
