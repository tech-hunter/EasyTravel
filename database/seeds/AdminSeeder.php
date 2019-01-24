<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin Row insert
        \App\Models\Admin\Admin::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
        ]);

        // Ticket Type Row insert
        $array = ['Business', 'Normal', 'AC', 'Non-AC', 'Standing'];
        for($i=0; $i<sizeof($array); $i++){
            \App\Models\TicketClass\TicketClass::create([
                'name' => $array[$i],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }        

        // Room Categories Row insert
        $arr = ['Single', 'Double', 'Family', 'Honeymoon'];
        for($j=0; $j<sizeof($arr); $j++){
            \App\Models\RoomCategory\RoomCategory::create([
                'name' => $arr[$j],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }        
    }
}
