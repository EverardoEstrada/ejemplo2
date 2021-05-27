<?php

use Illuminate\Database\Seeder;

class SeederPedidos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedidos')->insert([
            'descripcion' => 'chocolates',
            'unidades' => 200,
            'subtotal' => 1500,
            'imagen' => 'chocolate.jpg',
            ]);

    DB::table('pedidos')->insert([
        'descripcion' => 'limones',
        'unidades' => 100,
        'subtotal' => 500,
        'imagen' => 'limones.jpg',
    ]);



    }
}
