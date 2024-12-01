<?php

namespace App\Entities\Vehicles;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OwnerEntity extends Model {

    protected $table = 'owners';
    protected $guarded = [];

    public function vehicle(): HasMany {
        return $this->hasMany(VehicleEntity::class);
    }
}
