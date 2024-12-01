<?php

namespace Database\Seeders;

use App\Entities\Officers\OfficerEntity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class OfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = OfficerEntity::factory()->create([
            'identification_number' => '0983742',
            'password' => Hash::make('vmis_0983'),
        ]);
        $user->assignRole('admin');
    }
}
