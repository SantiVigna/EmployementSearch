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
    public function test_IfCanReceiveOneEmploymentInBladeShow()
    {
        $employment = Employment::factory()->create([
            'employment' => 'Senior Laravel Developer',
            'company' => 'Amazon',
        ]);

        $response = $this->get(route('show', $employment->id));

        $response->assertStatus(200);
        $response->assertSee($employment->employment);
        $response->assertSee($employment->company);
    }
}
