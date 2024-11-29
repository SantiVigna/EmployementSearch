<?php

namespace Tests\Feature;

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

    public function test_IfEmploymentsCanBeReceived()
    {
        $this->withoutExceptionHandling();

        Employment::all();

        $response = $this->get('/');

        $response->assertStatus(200)
                ->assertViewIs('home');
    }
}
