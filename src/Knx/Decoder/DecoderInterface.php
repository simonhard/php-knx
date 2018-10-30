<?php
declare(strict_types = 1);

namespace Knx\Decoder;

/**
 * Interface DecoderInterface defines specific dataType encode/decode functionality
 */
interface DecoderInterface
{
    /**
     * @param mixed $val
     * @return mixed
     */
    public function encode($val);

    /**
     * @param $val
     * @return mixed
     */
    public function decode($val);
}