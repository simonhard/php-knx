<?php

namespace Knx\Decoder;

/**
 * Class Dpt10001Decoder
 */
class Dpt10001Decoder extends AbstractDecoder implements DecoderInterface
{
    public function encode($val)
    {
        /**
         * encode: function( phy ){
        var val = Transform.zeroFillString( ((phy.getDay() << 5) + phy.getHours()).toString(16), 2);
        val += Transform.zeroFillString( phy.getMinutes().toString(16), 2 );
        val += Transform.zeroFillString( phy.getSeconds().toString(16), 2 );
        return '80' + val;
        }
         */

    }

    public function decode($val)
    {
        $this->prependZeros($val, 10);
    }
}