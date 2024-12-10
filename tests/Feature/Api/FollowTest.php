<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Follow;
use App\Models\Employment;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FollowTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic feature test example.
     */
    /* public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    } */

    public function test_IfAnEmploymentCanHaveFollows()
    {
        $employment = Employment::factory()->create();

        $follows = Follow::factory()->count(3)->create(['employment_id' => $employment->id]);

        $this->assertCount(3, $employment->follows);
        $this->assertEquals($follows->pluck('id')->toArray(), $employment->follows->pluck('id')->toArray());
    }

    public function test_IfAFollowBelongsToAnEmployment()
    {
        $employment = Employment::factory()->create();

        $follow = Follow::factory()->create(['employment_id' => $employment->id]);

        $this->assertEquals($employment->id, $follow->employment->id);
    }

    public function test_IfCanCreateFollowsForAnEmployment()
    {
        $employment = Employment::factory()->create();

        $follows = ['Primera novedad', 'Segunda novedad'];

        $response = $this->postJson(route('followstore', ['employmentId' => $employment->id]), [
            'news' => $follows,
        ]);

        $response->assertStatus(200)
                 ->assertJson([
                     'message' => 'Novedades añadidas correctamente',
                     'employment' => [
                         'id' => $employment->id,
                         'follows' => [
                             ['news' => 'Primera novedad'],
                             ['news' => 'Segunda novedad'],
                         ],
                     ],
                 ]);

        $this->assertDatabaseCount('follows', 2);
        foreach ($follows as $follow) {
            $this->assertDatabaseHas('follows', [
                'employment_id' => $employment->id,
                'news' => $follow,
            ]);
        }
    }

    public function test_IfReturnsA404ErrorWhenEmploymentDoesNotExist()
    {
        $EmploymentId = 999;
        $news = ['Primera novedad', 'Segunda novedad'];

        $response = $this->postJson(route('followstore', ['employmentId' => $EmploymentId]), [
            'news' => $news
        ]);

        $response->assertStatus(404);
        $response->assertJson([
            'message' => 'El trabajo no existe, no puede agregarse seguimiento',
        ]);
    }
}
