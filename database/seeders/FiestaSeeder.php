<?php

namespace Database\Seeders;

use App\Models\Fiesta;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FiestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $fiesta = new Fiesta();
        $fiesta->name= "University Party Fabrik";
        $fiesta->descripcion="Una fiesta para universitarios...o no";
        $fiesta->invitados="300";
        $fiesta->categoria="Fiesta +18";

        $fiesta->save();

        $fiesta2 = new Fiesta();
        $fiesta2->name= "University Party Fabrik";
        $fiesta2->descripcion="Una fiesta para universitarios...o no";
        $fiesta2->invitados="300";
        $fiesta2->categoria="Fiesta +18";

        $fiesta2->save();

        $fiesta3 = new Fiesta();
        $fiesta3->name= "University Party Fabrik";
        $fiesta3->descripcion="Una fiesta para universitarios...o no";
        $fiesta3->invitados="300";
        $fiesta3->categoria="Fiesta +18";

        $fiesta3->save();
        */
        Fiesta::factory(50)->create();
    }
}
