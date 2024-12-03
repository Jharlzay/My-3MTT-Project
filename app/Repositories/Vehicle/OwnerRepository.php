<?php

namespace App\Repositories\Vehicle;

use App\Contracts\Vehicle\OwnerInterface;
use App\Entities\Vehicles\OwnerEntity;
use App\Repositories\BaseRepository;
use Illuminate\Container\Container as App;

class OwnerRepository extends BaseRepository implements OwnerInterface {


    public function __construct(App $app) {
        parent::__construct($app);
    }

    public function create(array $data) {
        return $this->model->create($data);
    }

    protected function getClass(): string {
        return OwnerEntity::class;
    }
}
