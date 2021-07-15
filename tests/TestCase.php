<?php

declare(strict_types=1);

namespace Tests;

use Laravel\Lumen\Testing\TestCase as BaseTestCase;
use Laravel\Lumen\Application;

abstract class TestCase extends BaseTestCase
{
    /**
     * Called before each tests runs.
     *
     * Creates a fresh database and populates it with seed data. This will end
     * up slow if the application grows but makes it less likely that tests
     * will affect other ones by messing with the database.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->artisan("migrate:fresh");
        $this->artisan("db:seed");
    }

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
