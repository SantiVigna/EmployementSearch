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

    public function test_IfEmploymentInShowCanBeReceived()
    {
        $show = Employment::factory()->create([
            'employment' => 'Sample Post',
            'company' => 'dnmwjndjwand',
        ]);

        // Hacer una petición GET a la ruta del show
        $response = $this->get(route('show', $show->id));

        // Verificar que la respuesta es 200
        $response->assertStatus(200);

        // Verificar que el título y contenido están en la vista
        $response->assertSee($show->employment);
        $response->assertSee($show->company);
    }
}
