<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicles = [
            [
                'kd_kendaraan'      => 'KWK-ATV-001',
                'nama_kendaraan'     => 'Kawasaki ATV',
                'status'  => 'Tersedia',
            ],
            [
                'kd_kendaraan'      => 'HND-SCT-001',
                'nama_kendaraan'     => 'Honda Scooter',
                'status'  => 'Perbaikan',
            ],
            [
                'kd_kendaraan'      => 'MTB-SPD-001',
                'nama_kendaraan'     => 'Sepeda Gunung',
                'status'  => 'Berjalan',
            ],
            [
                'kd_kendaraan'      => 'KWK-ATV-002',
                'nama_kendaraan'     => 'Kawasaki ATV',
                'status'  => 'Berjalan',
            ],
            [
                'kd_kendaraan'      => 'MTB-SPD-002',
                'nama_kendaraan'     => 'Sepeda Gunung',
                'status'  => 'Tersedia',
            ],
        ];
        foreach ($vehicles as $key => $value) {
            Vehicle::create($value);
        }
    }
}
