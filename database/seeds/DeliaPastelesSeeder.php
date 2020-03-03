<?php

use App\DeliaPasteles;
use Illuminate\Database\Seeder;

class DeliaPastelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        for($i = 0;$i<2;$i++){
            DeliaPasteles::create([
                'titulo' => 'Prueba'.$i,
                'ingredientes' => 'Prueba',
                'preparacion' => 'Prueba'
            ]);
        }
    }
}
