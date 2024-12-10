<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Employment;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /* Employment::factory(8)->create(); */
        

        Employment::factory()->create([
            'employment' => "PHP Programmer with knowledge of Python",
            'state' => "0",
            'company'=> "Gaylord-Stamm",
            'country'=> "Andorra",
            'contact' => "+1 (260) 264-1297",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1733826497/EmploymentSearch/jzn8nply7xyr3ux98axz.png",
        ]);

        Employment::factory()->create([
            'employment' => "HTML5 Web Developer",
            'state' => "1",
            'company'=> "Sawayn, Barton and Schiller",
            'country'=> "Estonia",
            'contact' => "620.887.1776",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1733826523/EmploymentSearch/vzenxosqhrbkmuixuvpf.png",
        ]);

        Employment::factory()->create([
            'employment' => "PHP Vanilla Programmer",
            'state' => "1",
            'company'=> "Cole, Gleason and Russel",
            'country'=> "Argentina",
            'contact' => "559.212.8752",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1733826497/EmploymentSearch/jzn8nply7xyr3ux98axz.png",
        ]);

        Employment::factory()->create([
            'employment' => "Python Developer",
            'state' => "1",
            'company'=> "Bruen, Beatty and Sanford",
            'country'=> "Albania",
            'contact' => "+1-930-663-0632",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1733826299/EmploymentSearch/yyzfos3grdwa00v2wqrl.png",
        ]);

        Employment::factory()->create([
            'employment' => "Programmer C++ Software Developer",
            'state' => "1",
            'company'=> "Yundt PLC",
            'country'=> "Ecuador",
            'contact' => "845.434.1580",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1733826666/EmploymentSearch/xga3eoqcmwbgkq2iknzf.png",
        ]);

        Employment::factory()->create([
            'employment' => "HTML5 Web Developer",
            'state' => "1",
            'company'=> "Dibbert-Wyman",
            'country'=> "Burkina Faso",
            'contact' => "(909) 422-0800",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1733826523/EmploymentSearch/vzenxosqhrbkmuixuvpf.png",
        ]);

        Employment::factory()->create([
            'employment' => "Python Developer",
            'state' => "0",
            'company'=> "Veum Inc",
            'country'=> "Iraq",
            'contact' => "1-769-920-1255",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1733826299/EmploymentSearch/yyzfos3grdwa00v2wqrl.png",
        ]);

        Employment::factory()->create([
            'employment' => "Programmer C++ Software Developer",
            'state' => "1",
            'company'=> "Connelly, Collins and Leannon",
            'country'=> "Bhutan",
            'contact' => "+14638916817",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1733826666/EmploymentSearch/xga3eoqcmwbgkq2iknzf.png",
        ]);
    }
}
