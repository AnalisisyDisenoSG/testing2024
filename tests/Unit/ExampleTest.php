<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Calculadora;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_suma(): void
    {
        $cal = new Calculadora();

        $result = $cal->sumar(2, 3);

        $this->assertEquals(5, $result);
    }
}
