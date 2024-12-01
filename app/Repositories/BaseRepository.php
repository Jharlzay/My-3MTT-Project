<?php

namespace App\Repositories;

use App\Entities\Officers\OfficerEntity;
use App\Entities\Vehicles\VehicleEntity;
use App\Entities\Vehicles\VehicleQueryEntity;
use Illuminate\Container\Container as App;

abstract class BaseRepository
{

    protected $app;

    protected $model;

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    abstract protected function getClass(): string;

    protected function makeModel()
    {
        $this->model = $this->app->make($this->getClass());
    }

}
