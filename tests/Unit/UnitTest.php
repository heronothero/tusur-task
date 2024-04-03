<?php
declare(strict_types=1);
namespace Tests\Unit;

use App\Services\Service;
use PHPUnit\Framework\TestCase;
class UnitTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_main(): void
    {
        $this->assertTrue(true);
    }
    
    public function test_successful_calculation()
    {
        $a = 1;
        $b = 4;
        $c = 4;

        $results = Service::solve($a, $b, $c);
        $results = array_map('floatval', $results);
        $this->assertEquals([
            'D' => 0.0,
            'X1' => -2.0,
            'X2' => 0,
        ], $results);
    }

    public function test_unsuccessful_calculation()
    {
        $a = 0;
        $b = 0;
        $c = 0;
        $results = Service::solve($a, $b, $c);

        $this->assertNotEquals([
            'D' => 0,
            'X1' => 0,
            'X2' => 0,
        ], $results);
    }
}
