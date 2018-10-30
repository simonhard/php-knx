<?php
namespace Tests\Decoder;

use PHPUnit\Framework\TestCase;
use Tests\Stubs\BasicDecoderStub;

/**
 * Class BasicDecoderTest
 * @covers
 */
class BasicDecoderTest extends TestCase
{
    /**
     * @test
     * @dataProvider zerosDataProvider
     *
     * @param string $input
     * @param int $length
     * @param string $expectedValue
     */
    public function itFillsWithZeros(string $input, int $length, string $expectedValue)
    {
        $decoder = new BasicDecoderStub();

        $this->assertSame($expectedValue, $decoder->prependZeros($input, $length));
    }

    /**
     * @return array
     */
    public function zerosDataProvider(): array
    {
        return [
            [
                '9a4f', 13, '0000000009a4f',
            ],
            [
                '9a4f', 8, '00009a4f',
            ],
            [
                '9a4f', 5, '09a4f',
            ],
            [
                'abcdef', 10, '0000abcdef',
            ],
        ];
    }
}