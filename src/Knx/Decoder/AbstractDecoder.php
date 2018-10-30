<?php

namespace Knx\Decoder;

/**
 * Class AbstractDecoder
 * @author Simon Huebner <simon.huebner@wfp2.com>
 */
abstract class AbstractDecoder
{
    /**
     * @param string $input
     * @param int $length
     * @return string
     */
    public function prependZeros(string $input, int $length): string
    {
        return \str_pad($input, $length, "0", \STR_PAD_LEFT);
    }
}