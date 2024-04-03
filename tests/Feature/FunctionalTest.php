<?php
declare(strict_types=1);
namespace Tests\Feature;

use App\Services\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
class FunctionalTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_main(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_calculate_empty(): void
    {
        $response = $this->post('/calculate', []);

        $response->assertStatus(500);
    }

    public function test_main_filled()
    {
        $response = $this->post('/calculate', ['a' => 1, 'b' => 2, 'c' => 1]);

        $response->assertStatus(200)
                 ->assertJson([
                     'D' => 0,
                     'X1' => -1,
                     'X2' => -1
                 ]);
    }
    public function test_logic()
    {
        $result = Service::solve(1, -3, 2);

        $this->assertEquals(['D' => 1, 'X1' => 2, 'X2' => 1], $result);
    }
}
