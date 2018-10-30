<?php
declare(strict_types = 1);

namespace Knx\Service;

use Knx\Decoder\DecoderInterface;
use Knx\Service\Exception\DecoderNotFoundException;

/**
 * Class TransformService
 */
class TransformService
{
    /**
     * @var DecoderInterface;
     */
    protected $decoder = null;

    /**
     * @param DecoderInterface $decoder
     * @return TransformService
     */
    public function setDecoder(DecoderInterface $decoder): TransformService
    {
        $this->decoder = $decoder;

        return $this;
    }

    /**
     * @param $val
     * @return mixed
     */
    public function encode($val)
    {
        if (null === $this->decoder) {
            throw new DecoderNotFoundException("Please provide a decoder to this instance.");
        }
        return $this->decoder->encode($val);
    }
}