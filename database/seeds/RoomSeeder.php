<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Room::truncate();

        Room::create(['name' => 'Room1']);
        Room::create(['name' => 'Moordenaar']);
        Room::create(['name' => 'Room2']);
        Room::create(['name' => 'Room3']);
        Room::create(['name' => 'Room4']);
    }
}
