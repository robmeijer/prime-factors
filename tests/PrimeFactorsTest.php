<?php

namespace App\Test;

use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /**
     * @dataProvider inputs
     */
    public function testPrimeFactors(int $input, array $expected): void
    {
        self::assertSame(
            $expected,
            prime_factors($input),
            sprintf('Unexpected response for the given input: %s.', $input)
        );
    }

    public function inputs(): array
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [7, [7]],
            [8, [2, 2, 2]],
            [9, [3, 3]],
            [10, [2, 5]],
            [11, [11]],
            [12, [2, 2, 3]],
            [13, [13]],
            [14, [2, 7]],
            [15, [3, 5]],
            [16, [2, 2, 2, 2]],
            [17, [17]],
            [18, [2, 3, 3]],
            [19, [19]],
            [20, [2, 2, 5]],
            [21, [3, 7]],
            [22, [2, 11]],
            [23, [23]],
            [24, [2, 2, 2, 3]],
            [25, [5, 5]],
            [26, [2, 13]],
            [27, [3, 3, 3]],
            [28, [2, 2, 7]],
            [29, [29]],
            [30, [2, 3, 5]],
        ];
    }
}
