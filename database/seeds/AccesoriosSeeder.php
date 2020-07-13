<?php

use Illuminate\Database\Seeder;

class AccesoriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Accesorios::class, 9)->create();
    }
}
