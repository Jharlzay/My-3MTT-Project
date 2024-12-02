<?php

namespace App\Contracts\Officer;

use Illuminate\Database\Eloquent\Collection;

interface OfficerInterface {

    public function getAllOfficers(): Collection;
    public function create(array $data);
}
