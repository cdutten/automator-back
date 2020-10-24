<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (['Edenor', 'Metrogas', 'Rent'] as $service) {
            DB::table('services')->insert([
                'name' => $service,
            ]);
        }
    }
}
