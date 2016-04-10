<?php

# CAVS 11.1
# Config info for aes_values
# AESVS KeySbox test data for CBC
# State : Encrypt and Decrypt
# Key Length : 192
# Generated on Fri Apr 22 15:11:35 2011

namespace AES\Test;

use AES\Mode\CBC;
use AES\Key;

class CBCKeySbox192 extends \PHPUnit_Framework_TestCase
{
    function caseProvider()
    {
        return [
            ['e9f065d7c13573587f7875357dfbb16c53489f6a4bd0f7cd', '00000000000000000000000000000000', '00000000000000000000000000000000', '0956259c9cd5cfd0181cca53380cde06'],
            ['15d20f6ebc7e649fd95b76b107e6daba967c8a9484797f29', '00000000000000000000000000000000', '00000000000000000000000000000000', '8e4e18424e591a3d5b6f0876f16f8594'],
            ['a8a282ee31c03fae4f8e9b8930d5473c2ed695a347e88b7c', '00000000000000000000000000000000', '00000000000000000000000000000000', '93f3270cfc877ef17e106ce938979cb0'],
            ['cd62376d5ebb414917f0c78f05266433dc9192a1ec943300', '00000000000000000000000000000000', '00000000000000000000000000000000', '7f6c25ff41858561bb62f36492e93c29'],
            ['502a6ab36984af268bf423c7f509205207fc1552af4a91e5', '00000000000000000000000000000000', '00000000000000000000000000000000', '8e06556dcbb00b809a025047cff2a940'],
            ['25a39dbfd8034f71a81f9ceb55026e4037f8f6aa30ab44ce', '00000000000000000000000000000000', '00000000000000000000000000000000', '3608c344868e94555d23a120f8a5502d'],
            ['e08c15411774ec4a908b64eadc6ac4199c7cd453f3aaef53', '00000000000000000000000000000000', '00000000000000000000000000000000', '77da2021935b840b7f5dcc39132da9e5'],
            ['3b375a1ff7e8d44409696e6326ec9dec86138e2ae010b980', '00000000000000000000000000000000', '00000000000000000000000000000000', '3b7c24f825e3bf9873c9f14d39a0e6f4'],
            ['950bb9f22cc35be6fe79f52c320af93dec5bc9c0c2f9cd53', '00000000000000000000000000000000', '00000000000000000000000000000000', '64ebf95686b353508c90ecd8b6134316'],
            ['7001c487cc3e572cfc92f4d0e697d982e8856fdcc957da40', '00000000000000000000000000000000', '00000000000000000000000000000000', 'ff558c5d27210b7929b73fc708eb4cf1'],
            ['f029ce61d4e5a405b41ead0a883cc6a737da2cf50a6c92ae', '00000000000000000000000000000000', '00000000000000000000000000000000', 'a2c3b2a818075490a7b4c14380f02702'],
            ['61257134a518a0d57d9d244d45f6498cbc32f2bafc522d79', '00000000000000000000000000000000', '00000000000000000000000000000000', 'cfe4d74002696ccf7d87b14a2f9cafc9'],
            ['b0ab0a6a818baef2d11fa33eac947284fb7d748cfb75e570', '00000000000000000000000000000000', '00000000000000000000000000000000', 'd2eafd86f63b109b91f5dbb3a3fb7e13'],
            ['ee053aa011c8b428cdcc3636313c54d6a03cac01c71579d6', '00000000000000000000000000000000', '00000000000000000000000000000000', '9b9fdd1c5975655f539998b306a324af'],
            ['d2926527e0aa9f37b45e2ec2ade5853ef807576104c7ace3', '00000000000000000000000000000000', '00000000000000000000000000000000', 'dd619e1cf204446112e0af2b9afa8f8c'],
            ['982215f4e173dfa0fcffe5d3da41c4812c7bcc8ed3540f93', '00000000000000000000000000000000', '00000000000000000000000000000000', 'd4f0aae13c8fe9339fbf9e69ed0ad74d'],
            ['98c6b8e01e379fbd14e61af6af891596583565f2a27d59e9', '00000000000000000000000000000000', '00000000000000000000000000000000', '19c80ec4a6deb7e5ed1033dda933498f'],
            ['b3ad5cea1dddc214ca969ac35f37dae1a9a9d1528f89bb35', '00000000000000000000000000000000', '00000000000000000000000000000000', '3cf5e1d21a17956d1dffad6a7c41c659'],
            ['45899367c3132849763073c435a9288a766c8b9ec2308516', '00000000000000000000000000000000', '00000000000000000000000000000000', '69fd12e8505f8ded2fdcb197a121b362'],
            ['ec250e04c3903f602647b85a401a1ae7ca2f02f67fa4253e', '00000000000000000000000000000000', '00000000000000000000000000000000', '8aa584e2cc4d17417a97cb9a28ba29c8'],
            ['d077a03bd8a38973928ccafe4a9d2f455130bd0af5ae46a9', '00000000000000000000000000000000', '00000000000000000000000000000000', 'abc786fb1edb504580c4d882ef29a0c7'],
            ['d184c36cf0dddfec39e654195006022237871a47c33d3198', '00000000000000000000000000000000', '00000000000000000000000000000000', '2e19fb60a3e1de0166f483c97824a978'],
            ['4c6994ffa9dcdc805b60c2c0095334c42d95a8fc0ca5b080', '00000000000000000000000000000000', '00000000000000000000000000000000', '7656709538dd5fec41e0ce6a0f8e207d'],
            ['c88f5b00a4ef9a6840e2acaf33f00a3bdc4e25895303fa72', '00000000000000000000000000000000', '00000000000000000000000000000000', 'a67cf333b314d411d3c0ae6e1cfcd8f5']
        ];
    }

    /**
     * @dataProvider caseProvider
     */
    function testEncrypt($key, $iv, $plaintext, $ciphertext)
    {
        $key = new Key(hex2bin($key));
        $cbc = new CBC;
        $ctx = $cbc->init($key, hex2bin($iv));
        $result = $cbc->encrypt($ctx, hex2bin($plaintext));
        $this->assertSame(hex2bin($ciphertext), $result);
    }

    /**
     * @dataProvider caseProvider
     */
    function testDecrypt($key, $iv, $plaintext, $ciphertext)
    {
        $key = new Key(hex2bin($key));
        $cbc = new CBC;
        $ctx = $cbc->init($key, hex2bin($iv));
        $result = $cbc->decrypt($ctx, hex2bin($ciphertext));
        $this->assertSame(hex2bin($plaintext), $result);
    }
}
