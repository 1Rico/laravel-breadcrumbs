<?php

namespace BreadcrumbsTests;

use Config;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
use DaveJamesMiller\Breadcrumbs\BreadcrumbsServiceProvider;
use Orchestra\Testbench\TestCase as TestbenchTestCase;
use View;

abstract class TestCase extends TestbenchTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            BreadcrumbsServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Breadcrumbs' => Breadcrumbs::class,
        ];
    }

    protected function setUp()
    {
        parent::setUp();

        View::getFinder()->prependLocation(__DIR__ . '/resources/views');
        Config::set('breadcrumbs.view', 'breadcrumbs');
    }
}
