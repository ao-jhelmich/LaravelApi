<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Item::create(['name' => 'touw']);
         Item::create(['name' => 'lepel']);
         Item::create(['name' => 'beker']);
         Item::create(['name' => 'mes']);
         Item::create(['name' => 'vork']);
         Item::create(['name' => 'snijplank']);
         Item::create(['name' => 'euro']);
         Item::create(['name' => 'koffie']);
         Item::create(['name' => 'water']);
         Item::create(['name' => 'gas']);
         Item::create(['name' => 'cactus']);
         Item::create(['name' => 'bloempot']);
         Item::create(['name' => 'vlag']);
         Item::create(['name' => 'trommel']);
         Item::create(['name' => 'uniform']);
         Item::create(['name' => 'das']);
         Item::create(['name' => 'bank']);
         Item::create(['name' => 'verkeersbord']);
         Item::create(['name' => 'bord']);
         Item::create(['name' => 'pan']);
         Item::create(['name' => 'fluitkoord']);
    }
}
