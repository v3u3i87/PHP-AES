<?php declare(strict_types = 1);

namespace AES;

use AES\Exception\KeyLengthException;

class Key
{
    private $bits;
    private $encryptionKey;
    private $decryptionKey;

    function __construct(string $key)
    {
        $bits = strlen($key) << 3;

        switch ($bits) {
            case 128:
                $this->generate128($key);
                break;
            case 192:
                $this->generate192($key);
                break;
            case 256:
                $this->generate256($key);
                break;
            default:
                throw new KeyLengthException;
        }

        $this->bits = $bits;
    }
    
    function bits(): int
    {
        return $this->bits;
    }
    
    function encryptionKey(): array
    {
        return $this->encryptionKey;
    }
    
    function decryptionKey(): array
    {
        return $this->decryptionKey;
    }
    
    private function encryptionKeyRound(int $k, int $rc): int
    {
        return (SUBBYTES[$k       & 0xff]        <<  8) |
               (SUBBYTES[$k >>  8 & 0xff]        << 16) |
              ((SUBBYTES[$k >> 16 & 0xff] ^ $rc) << 24) |
                SUBBYTES[$k >> 24       ];
    }
    
    private function decryptionKeyRound(int $k): int
    {
        return MIXCOLUMNS_INVERSE_0[SUBBYTES[$k >> 24       ]] ^
               MIXCOLUMNS_INVERSE_1[SUBBYTES[$k >> 16 & 0xff]] ^
               MIXCOLUMNS_INVERSE_2[SUBBYTES[$k >>  8 & 0xff]] ^
               MIXCOLUMNS_INVERSE_3[SUBBYTES[$k       & 0xff]];
    }
    
    private function generate128(string $key)
    {
        list(, $k0, $k1, $k2, $k3) = unpack('N4', $key);
        
        $encryptionKey =
        $decryptionKey = [$k0, $k1, $k2, $k3];

        for ($i = 4, $rc = 1; $i < 40; $rc = ($rc << 1) % 0xe5) {
            $encryptionKey[$i  ] = $k0 ^= $this->encryptionKeyRound($k3, $rc);
            $decryptionKey[$i++] = $this->decryptionKeyRound($k0);
            $encryptionKey[$i  ] = $k1 ^= $k0;
            $decryptionKey[$i++] = $this->decryptionKeyRound($k1);
            $encryptionKey[$i  ] = $k2 ^= $k1;
            $decryptionKey[$i++] = $this->decryptionKeyRound($k2);
            $encryptionKey[$i  ] = $k3 ^= $k2;
            $decryptionKey[$i++] = $this->decryptionKeyRound($k3);
        }

        $encryptionKey[56] = $decryptionKey[56] = $k0 ^= $this->encryptionKeyRound($k3, 0x36);
        $encryptionKey[57] = $decryptionKey[57] = $k1 ^= $k0;
        $encryptionKey[58] = $decryptionKey[58] = $k2 ^= $k1;
        $encryptionKey[59] = $decryptionKey[59] = $k3 ^ $k2;
        
        $this->encryptionKey = $encryptionKey;
        $this->decryptionKey = $decryptionKey;
    }
    
    private function generate192(string $key)
    {
        list(, $k0, $k1, $k2, $k3, $k4, $k5) = unpack('N6', $key);

        $encryptionKey = [$k0, $k1, $k2, $k3, $k4, $k5];
        $decryptionKey = [
            $k0, $k1, $k2, $k3,
            $this->decryptionKeyRound($k4),
            $this->decryptionKeyRound($k5)
        ];

        for ($i = 6, $rc = 1; $i < 48; $rc <<= 1) {
            $encryptionKey[$i  ] = $k0 ^= $this->encryptionKeyRound($k5, $rc);
            $decryptionKey[$i++] = $this->decryptionKeyRound($k0);
            $encryptionKey[$i  ] = $k1 ^= $k0;
            $decryptionKey[$i++] = $this->decryptionKeyRound($k1);
            $encryptionKey[$i  ] = $k2 ^= $k1;
            $decryptionKey[$i++] = $this->decryptionKeyRound($k2);
            $encryptionKey[$i  ] = $k3 ^= $k2;
            $decryptionKey[$i++] = $this->decryptionKeyRound($k3);
            $encryptionKey[$i  ] = $k4 ^= $k3;
            $decryptionKey[$i++] = $this->decryptionKeyRound($k4);
            $encryptionKey[$i  ] = $k5 ^= $k4;
            $decryptionKey[$i++] = $this->decryptionKeyRound($k5);
        }

        $encryptionKey[56] = $decryptionKey[56] = $k0 ^= $this->encryptionKeyRound($k5, 0x80);
        $encryptionKey[57] = $decryptionKey[57] = $k1 ^= $k0;
        $encryptionKey[58] = $decryptionKey[58] = $k2 ^= $k1;
        $encryptionKey[59] = $decryptionKey[59] = $k3 ^ $k2;

        $this->encryptionKey = $encryptionKey;
        $this->decryptionKey = $decryptionKey;
    }
    
    private function generate256(string $key)
    {
        list(, $k0, $k1, $k2, $k3, $k4, $k5, $k6, $k7) = unpack('N8', $key);

        $encryptionKey = [$k0, $k1, $k2, $k3, $k4, $k5, $k6, $k7];
        $decryptionKey = [
            $k0, $k1, $k2, $k3,
            $this->decryptionKeyRound($k4),
            $this->decryptionKeyRound($k5),
            $this->decryptionKeyRound($k6),
            $this->decryptionKeyRound($k7)
        ];

        for ($i = 8, $rc = 1; $i < 56; $rc <<= 1) {
            $encryptionKey[$i  ] = $k0 ^= $this->encryptionKeyRound($k7, $rc);
            $decryptionKey[$i++] = $this->decryptionKeyRound($k0);
            $encryptionKey[$i  ] = $k1 ^= $k0;
            $decryptionKey[$i++] = $this->decryptionKeyRound($k1);
            $encryptionKey[$i  ] = $k2 ^= $k1;
            $decryptionKey[$i++] = $this->decryptionKeyRound($k2);
            $encryptionKey[$i  ] = $k3 ^= $k2;
            $decryptionKey[$i++] = $this->decryptionKeyRound($k3);
            $encryptionKey[$i  ] = $k4 ^= (SUBBYTES[$k3 & 0xff] | (SUBBYTES[$k3 >> 8 & 0xff] << 8) | (SUBBYTES[$k3 >> 16 & 0xff] << 16) | (SUBBYTES[$k3 >> 24] << 24));
            $decryptionKey[$i++] = $this->decryptionKeyRound($k4);
            $encryptionKey[$i  ] = $k5 ^= $k4;
            $decryptionKey[$i++] = $this->decryptionKeyRound($k5);
            $encryptionKey[$i  ] = $k6 ^= $k5;
            $decryptionKey[$i++] = $this->decryptionKeyRound($k6);
            $encryptionKey[$i  ] = $k7 ^= $k6;
            $decryptionKey[$i++] = $this->decryptionKeyRound($k7);
        }

        $encryptionKey[56] = $decryptionKey[56] = $k0 ^= $this->encryptionKeyRound($k7, 0x40);
        $encryptionKey[57] = $decryptionKey[57] = $k1 ^= $k0;
        $encryptionKey[58] = $decryptionKey[58] = $k2 ^= $k1;
        $encryptionKey[59] = $decryptionKey[59] = $k3 ^ $k2;

        $this->encryptionKey = $encryptionKey;
        $this->decryptionKey = $decryptionKey;
    }
}
