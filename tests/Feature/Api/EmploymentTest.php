<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Employment;

class EmploymentTest extends TestCase
{
    use RefreshDatabase;

    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_IfReceiveAllEmploymentsInJson(){
        $employment = Employment::factory(2)->create();

        $response = $this->get(route('apihome'));

        $response->assertStatus(200)
                ->assertJsonCount(2);
    }

    public function test_IfCanDeleteAnEmploymentWithApi(){
        $employment = Employment::factory(2)->create();

        $response = $this->delete(route('apidestroy', 1));
        $this->assertDatabaseCount('employments', 1);

        $response = $this->get(route('apihome'));
        $response->assertJsonCount(1);
    }

    public function test_IfCanCreateAnEmploymentWithApi(){
        $response = $this->post(route('apistore'), [
            'employment' => "Utility Meter Reader",
            'state' => "0",
            'company'=> "Veum Inc",
            'country'=> "Iraq",
            'contact' => "1-769-920-1255",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1732696952/EmploymentSearch/Utility%20Meter%20Reader.jpg",
        ]);

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                ->assertJsonCount(1);

    }

    public function test_IfCanUpdateAnEmploymentWithJsonFile(){
        $response = $this->post(route('apistore'), [
            'employment' => "Utility Meter Reader",
            'state' => "0",
            'company'=> "Veum Inc",
            'country'=> "Iraq",
            'contact' => "1-769-920-1255",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1732696952/EmploymentSearch/Utility%20Meter%20Reader.jpg",
        ]);

        $data = ['employment' => "Utility Meter Reader"];
        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

        $response = $this->put(route('apiupdate', 1), [
            'employment' => "Offset Lithographic Press Operator",
            'state' => "1",
            'company'=> "Cole, Gleason and Russel",
            'country'=> "Argentina",
            'contact' => "559.212.8752",
            'image' => "https://res.cloudinary.com/dq2kswexq/image/upload/v1732696643/EmploymentSearch/Offset%20Lithographic%20Press%20Operator.jpg",
        ]);

        $data = ['employment' => "Offset Lithographic Press Operator"];
        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

    }

    public function test_IfReceiveJustOneEmployment(){
        $employment = Employment::factory(2)->create();

        $response = $this->get(route('apishow', 1));

        $data = ['id' => 1];
        $response->assertStatus(200)
                ->assertJsonFragment($data);
    }
}
