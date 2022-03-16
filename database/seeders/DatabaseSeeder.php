<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Worker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'Tamas', 'city'=>'Budapest', 'birthdate'=>'1999-01-07', 'salary'=>'999999'],
            ['name'=>'Gergo', 'city'=>'Esztergom', 'birthdate'=>'1999-06-06', 'salary'=>'888888'],
            ['name'=>'Ildiko', 'city'=>'Kisvárda', 'birthdate'=>'1998-01-01', 'salary'=>'777777'],
            ['name'=>'Tamara', 'city'=>'Kesztölc', 'birthdate'=>'1967-12-12', 'salary'=>'666666'],
            ['name'=>'Alex', 'city'=>'Miskolc', 'birthdate'=>'1987-02-25', 'salary'=>'555555'],
        ];
        foreach($data as $element)
        {
            Worker::create($element);
        }
    }
}
