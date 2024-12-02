<?php

namespace App\Repositories\Officer;

use App\Contracts\Officer\OfficerInterface;
use App\Entities\Officers\OfficerEntity;
use App\Repositories\BaseRepository;
use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;

class OfficerRepository extends BaseRepository implements OfficerInterface{


    protected OfficerEntity $officerEntity;

    public function __construct(App $app, OfficerEntity $officerEntity) {
        parent::__construct($app);
        $this->officerEntity = $officerEntity;
    }

    public function getAllOfficers(): Collection {
        return $this->officerEntity->all();
    }

    public function create(array $data) {
        return $this->model->create($data);
    }


    protected function getClass(): string {
        return OfficerEntity::class;
    }
}
