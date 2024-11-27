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
            'employment' => "Medical Sales Representative",
            'state' => "0",
            'company'=> "Gaylord-Stamm",
            'country'=> "Andorra",
            'contact' => "+1 (260) 264-1297",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1732696257/EmploymentSearch/Medical%20Sales%20Representative.webp",
        ]);

        Employment::factory()->create([
            'employment' => "Graphic Designer",
            'state' => "1",
            'company'=> "Sawayn, Barton and Schiller",
            'country'=> "Estonia",
            'contact' => "620.887.1776",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1732696446/EmploymentSearch/Graphic%20Designer.webp",
        ]);

        Employment::factory()->create([
            'employment' => "Offset Lithographic Press Operator",
            'state' => "1",
            'company'=> "Cole, Gleason and Russel",
            'country'=> "Argentina",
            'contact' => "559.212.8752",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1732696643/EmploymentSearch/Offset%20Lithographic%20Press%20Operator.jpg",
        ]);

        Employment::factory()->create([
            'employment' => "Photographic Restorer",
            'state' => "1",
            'company'=> "Bruen, Beatty and Sanford",
            'country'=> "Albania",
            'contact' => "+1-930-663-0632",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1732696721/EmploymentSearch/Photographic%20Restorer.jpg",
        ]);

        Employment::factory()->create([
            'employment' => "Residential Advisor",
            'state' => "1",
            'company'=> "Yundt PLC",
            'country'=> "Ecuador",
            'contact' => "845.434.1580",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1732696817/EmploymentSearch/Residential%20Advisor.jpg",
        ]);

        Employment::factory()->create([
            'employment' => "Cement Mason and Concrete Finisher",
            'state' => "1",
            'company'=> "Dibbert-Wyman",
            'country'=> "Burkina Faso",
            'contact' => "(909) 422-0800",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1732696898/EmploymentSearch/Cement%20Mason%20and%20Concrete%20Finisher.jpg",
        ]);

        Employment::factory()->create([
            'employment' => "Utility Meter Reader",
            'state' => "0",
            'company'=> "Veum Inc",
            'country'=> "Iraq",
            'contact' => "1-769-920-1255",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1732696952/EmploymentSearch/Utility%20Meter%20Reader.jpg",
        ]);

        Employment::factory()->create([
            'employment' => "Lathe Operator",
            'state' => "1",
            'company'=> "Connelly, Collins and Leannon",
            'country'=> "Bhutan",
            'contact' => "+14638916817",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1732697001/EmploymentSearch/Lathe%20Operator.jpg",
        ]);
    }
}
