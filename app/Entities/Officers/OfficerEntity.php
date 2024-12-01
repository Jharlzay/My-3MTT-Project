<?php

namespace App\Entities\Officers;

use App\Entities\Vehicles\VehicleQueryEntity;
use Database\Factories\OfficerEntityFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class OfficerEntity extends Authenticatable {

    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $table = 'officers';
    protected $guarded = [];

    public function vehicleQuery(): HasMany {
        return $this->hasMany(VehicleQueryEntity::class, 'officer_id');
    }

    protected static function newFactory() : Factory
    {
        return OfficerEntityFactory::new();
    }
}
