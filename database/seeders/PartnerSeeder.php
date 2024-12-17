<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            ['name' => 'Nstore', 'logo' => 'logo1.png', 'service_id' => 1],
            ['name' => 'Sadia', 'logo' => 'logo2.png', 'service_id' => 2],
            ['name' => 'Petromin', 'logo' => 'logo3.png', 'service_id' => 3],
            ['name' => 'Saudi Supercar Club', 'logo' => 'logo4.png', 'service_id' => 4],
            ['name' => 'Nissan', 'logo' => 'logo5.png', 'service_id' => 5],
            ['name' => 'brf', 'logo' => 'logo6.png', 'service_id' => 6],
            ['name' => 'saudi aramco', 'logo' => 'logo7.png', 'service_id' => 7],
            ['name' => 'Casio', 'logo' => 'logo8.png', 'service_id' => 1],
            ['name' => 'G-shock', 'logo' => 'logo9.png', 'service_id' => 2],
            ['name' => 'Ford', 'logo' => 'logo10.png', 'service_id' => 3],
        ];
        foreach ($partners as $partner) {
            Partner::create([
                'name' => $partner['name'],
                'logo'=>$partner['logo'],
                'service_id'=>$partner['service_id']

            ]);
        }

    }
}
