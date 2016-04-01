<?php

# CAVS 11.1
# Config info for aes_values
# AESVS MMT test data for ECB
# State : Encrypt and Decrypt
# Key Length : 192
# Generated on Fri Apr 22 15:11:28 2011

namespace AES\Test;

use AES\ECB;
use AES\Key;

class ECBMMT192 extends \PHPUnit_Framework_TestCase
{
    function encryptProvider()
    {
        return [
            ['61396c530cc1749a5bab6fbcf906fe672d0c4ab201af4554', '60bcdb9416bac08d7fd0d780353740a5', '24f40c4eecd9c49825000fcb4972647a'],
            ['c9c86a51224e5f1916d3f33a602f697afc852a2c44d30d5f', '64145e61e61cd96f796b187464fabbde6f42e693f501f1d73b3c606f00801506', '502a73e4051cfac8fe6343211a129f5a5f56710c41b32c84da978dda2cec34ad'],
            ['c4854919c324d381bbef9bea771172f6e4563ffbd1e1e956', '07d3781a71e87b8cf12cac4616f9c7a819be57a0770a7a66e0e6e469506826897c8530866f2715b8757f0f01389dc301', '0b0455954e477e87d1a338414f8ac4d760efb70e5770e5d496b31152cb07e9316378f7fd38c6903b31d4f1b1a53931af'],
            ['3deecf7a037ebb2ada805e8059bfaeaebb195cace379fcd2', '096612f4111ebdb9accf5efbb973589e5a2c9103407ed2da29bc7137a6c02de822df5907201d3dcbc49cb9a3955b2b86811d938422a6f5a23f2dffe4960fecab', 'd375e1af5fcd03e31d0f735f6bc5d7e773bc34ff3eb706be85842f998e4e361303825b848170608f300ad1ced848b5233477f53710503c55736a730595599964'],
            ['0c0333d8fe3e99a1eecc120d6b54bb8faa888d12794de93e', '6f825ad0e2fcabd811db11e2840f0884470b87eaa678e329342bf0d1125569c16dfa924049a51b497d594825ffca4f4062cd02359d0ead2b0e014264bf1bb313e741a06eb4813205470047520133cf91', 'e6128a9fb497b2ec0d0e9fe1b24e691ea36c0628eb55046b2f20de9d281dd9dbbbeaa0519a4875d3516b15022330163b2798a9102ee9d141a3416c1a277442d4cf1fec87ccea571a23b91a461991ec0d'],
            ['b07da99fbe0b193e5336141a9819974b1a9a4102129db861', '27756c11f57c40169f95f25141fb1a07d9444d864e4c43b9b16f39fbc2fb9529b6e4c9fb37ba7994add9e057bce070fd0d64b8e452e58baa84005ffb6fe7f3a7710f35f87f28624268526fbb5e8ea88db272972adf2227e0ca7b09ad48915754', '7516e53877236e931e7fbae22ed2ca5116b72a700f6e397c2aa47c304b3f5c2a026d89831a5104ae7b73ef48de709c1b9e661ae973dea6bb38217a7650228ccc6b228b33f567121427e9f21cbd3ec6aa35ebba336f51ed8e4bf6e75c5866bc20'],
            ['80da652b1844dafe4fd4ca8ccc26b564b263711723b6cd48', '1e49e9541ed0f97023f8205e71fe75668680f12fb5902d7a11066d108c1adef960321cefaef8f71365b077de66c91e59e6b16c9113eea945fa6bdee3a80f25b38f9422512c97d260e7eb837d3b33247216b0bfac835744f08627884947b98d4573190460e0d410c170524d2437661118', 'a47e7d0d8266595792bc980bf3c47822229e4428cc91aa1b15519823a133dd479a4664ec8408b4d9301760454ed2037279d996eb1ccc98df77660aa97422dca1c54d7bfac37223d0caee6a6b34d760e767b9595f7f3bb631d6545a7442d3497a7b85054e8b99d24e65df985e5bccf450'],
            ['9a35954f400034b29c9f85766a255cf1393dccb8d6c93e65', '823fade2722805e4948db57639cbb67d477d4b01319d927826ec594789933486a20acc0393397a8a8ddd1564432e081e9fbfa78cb4a5c30cf5db7b0fa4e556d68db48f7af3cab02fcb9e62c928428480f7437af0ecd1c864bc1fdf538d0d362baa059d4e7c22cf5ab69846aecf50532ab5d26d35c068ca05e4802c1b2c53fe0c', '52c54ec4345e776b84952f5803ad3a52ba4cfedb32c2dc146ecc8813705f02fd3d4d559027e895e2ba29710396272436c398fa12ba02c85c02947df8035647334bc6c53e1d716f582206c8538f397784c3e42f535b68e8151b3cff71a82d2785b0eb298ff63aebc5d822549f44fbbcf0b69114323c9572d0bf674332fac3b57d'],
            ['280a05e6ba0542e4e16dafe63d738fb4c544241b6626729a', 'f4d46d6ac9969cb6994c4f5f97a58634e5927e52bfaa82a2f7cc04a3a106ec6a0fb530e700eea569141d156483ec91730f670899375d19ccae0926b40bf1aab0c20fcc1a532f34ccc1981de246eeabc245577f5a80dd8aa98b141e8181fc4b8bf528688b2b20f0e58805906148737d2b6fab0b1e02f27c417634159269ed7803904a2dc3f18b82be52ab9567f143afb5', 'a61376ae4c6f8fef51736087dd54ddc6cd917735386f73ff95884d92739d1af4a65386ad396fa01def9e3381133e2357506215519c2ebeffff12c35a70fb149d23f035d026ac1d24e5ec81f5c28684b4a203c29aaffc54794cabd3885090fc871cb8d4569190a39e3d34df87c3e05245ef7de4856d103e2a780361115f78e227622f93b7f9c2fd8390bfaf23a06cb348'],
            ['4f41fa4d4a25100b586551828373bcca5540c68e9bf84562', '7c727bd3e7048e7a8995b7b1169ae4b5a55e854bb4f7a9576d7863ab2868731d307322dcca606e047343676f6af4d9cf6ebf2bf9c95d87848d233c931e7a60eff08fb959924cde1eec8699ebc57890e3887024ef47c89a550018788d1faa3250452e06f148af25f07bc613cd2f0e501a79d738d4361f28f34dbee24034e03367b6b8d34df3738ca3a86b9ebcb09e639bcb5e2f519f4a7a86fc7c41556404a95d', '922812ad5feacdf11fe7fdae96300149419e31cff54061b3c5ed27fdb8b50c9c0932b522a6c04e482499b011ef3c3e9dc56a1a61cfeb78b34032d26dbdc3cac51a3279bc934b9bce2d9c19bf858235613ba784e48e292d22c6b5a28e1d1bb860524fb7b5f9b3d9a5f4da66e340585bd2496fe6d6942db8d05d716fec03b17d19abb58b33332e24beaec7995d69525364fe139aa1fd62054668c58f23f1f94cfd']
        ];
    }

    function decryptProvider()
    {
        return [
            ['f2d2b82280c2592ecfbcf500ae647078c9c57624cde9bf6c', '21c8229a4dceaf533fe4e96eced482a6', '49aabe67da5322b6e11d63b78b5a0e15'],
            ['4bb83429faaaa25265f65c8ebb1caf815916810defe89281', 'e741f38ed720877b53264ce81bdf2e5ea5b97163710ba29e9755cd3ba2caf091', '71b805feb56aaca22049073db10ad696751a4818b7005ae35eb3111cfeafcac8'],
            ['2ad0db3278b7f6afd75a0cb62b6132d36449010ef509a5b6', 'd1568d45f495112f12e37461aacddbfda7a71d0a40dacb6c1d7e6e13bb2c0f72110dfd337437ca29b83a978698f5914e', '7991ecf8ec98c6da6a27ee89055783f7302f5cb063f9c67084850702dfc9d64834536ecf524dc10f8504c1b132101ce5'],
            ['b7f4c377e6233c34717e7ac9040d369ac66c6d3f3b1e627d', 'fd71fec985a92046a5c0b633112bb2cdde3581d98bf4323b417bdbc55a51384d21229602d8b5ef00001e5721d4359616174617b70f0a0198d2d6a3ddc013154f', '9b540d3eb0bf52210aefe3b1929b3e43561c4110fb81520d41d671fc0f404dcddd879ef4a70f93311e6b034a6020e2b4fd5161748b57b61e7cbbd1d8e1d2cf42'],
            ['f714e621c97768d82eea6bf98ebf4a82c005262188ff894a', 'e24ff85f7ae75226ddd393972c3f836a0fc4aa13f997b896ae01249b030f12c5e58a7a409d29879952063dd3d04f5fb7883e906bd74bb8468ba0a9e3a3cd037456bd545957e884f258cb71b1cd95d673', 'f7058804932feae0851aca9be500c54ec35b3552dbb1417d81de51b0b0f3209dc999302369f25b1f133dfdbd9fe50b6834273806ef525c61ec4f5e88714cb945b0fa6481ce75bbff50e8eece1527baa7'],
            ['7c045f663d668e1f7ba80f06d0d25fefcb00b7808aaa3e95', '2a81ae3d397c7cd3b9746db43cc04b137261e5124c9158ed609e8d7590f903c1e68acf20c347e151390588f7b58e3947e1f38c04c82487ad3cbd1ff57423fc73fad07d9bc5ebfceda11c536cd89e9e520b96430261a3303ee4b6649a2724b130', '482466fe1bcbeb5ce8d21eb3b2c30997d36d4dd55f21e8271ad0b1b0cb12be86702eda3879db2838ee3a55fe9aef70c86118ac30b44030b7b53f8b21daba1a4c0137f58e1832aa8247809746e33da9a45ba6431d261546a9784c321be360d32e'],
            ['0b4bd7be14e239620c8eb992a48ab50b3815849401d04e83', 'fe9a6e64dc5a5e485c96b854299ba3e6b958610780c325f1647825cf70a3f1c3cc21032dede2972b0992bd5cce78acea539e59c74f324836892ca28e8f31893aabb7a805136b0e9560cf3c3441287cd771977558e686fd074c452e61b1f5bc1f82a68573b6bc6a8e49975e65ec73bcb5', '723e9a19c8526d312c75beef81c398dd3371594f98e7740ed9ffd65e347fde28cd677f58284930c6f45c61365103f24bc28034fb19f16549e0acbcaf141952e44df19e9256789a5054e8196eb4c52dad29a5e683cc668a78fa43526a0fc62c88229448098ef3d9bc237ff4f97a2e9491'],
            ['f5bd199c43e9917dfddf8464483ee605587d21ad907f5c7b', '557d3629e71ba544a20abaa2f314e77b844ac791609b5f6359a6a5a4a7cd3eebd18b8cacd107e86773e92c1ffe6c750e16b42797e163317c6967925141151c316c7c77af7af36a0ff4f556b7fa2f03e02bd69f91c53e04ce0da93a0df25d3de9edf9001a2b08b1a5eed73f5031841a598b583a67555662c10f14a6be00ca2b7d', '34a8cbb7afab72a8e5753f04a5d18726f1f0a9a92e02f593d78d28c9dd50377af7bd4efa3eeb7b71ca7beb420161358088e2bdc295b65fcbe6097f7178a278b601a26102afd341f8c94f89b792ae421fcd458879704e9224f102b6ce204c55df73e15539d2fe04e8dc3e25e9e893994b5ae2705d65c01e0586ca4b18abf14f30'],
            ['2f8118dd5b2ec401b9f501cf0149cb65ac451ed943e25e15', 'c11a65accf2faa952d078713b6a73c7648fe4a4b0f1cd82d06a055deba6f5f9652ace39acce48611898844130ca15704ffbf5b207632af56787d1e5abc08bff6b01519a1bff58b52d47cec961ab26ee107cbc821985a9499dec1f5edb9ec7e79e43f4fe731cc810116cac5c3694247b5680cd978fcfa4d9e3f5322bf3b8364c8f510cd97aad030c5585a18c380baac29', 'd09b7aa92197e1a6a42d67a02091bc10f8b59cfea963d8ea279e8cd46b517508817aab5d4a7627ea39ad27b03a3b1c610f724bad22996d8249a4eab076e3091100da1aeb20698c00879b1f44549cc5209a0ee3a2f897355eed420cfa42a141944e904023bcd099dda51eb5444adbb30d920f887dc04362783c2fed4f336d5c0631acef029d95b545dcf9d0c40df2de6b'],
            ['9cc24ea1f1959d9a972e7182ef3b4e22a97a87d0da7ff64b', '952f4546a8bf7166964917ece01bda3c6857e427cef5da0ff90b0e4bf44cf7ccfccfdf01d713dcf9673f01c87eaed52bf4aa046ff778558ea396dc9cd240716136386148a5c76378b3ffcd40864407b8e60b40a594e0619eddae3f6d6e3b15b86af231e1bae5ed2aa512e11da0e5572b67ffff934c36e585cfdd9f877045cb19c183b994bf74645862ffa726739aadcb9e10aaffc881c88ca3aa65b37f667bcb', 'b8bb5ce53a15aa6dfdf2cb61bc8e3617d1d0fefe9ba5d175550470e32397f6f3b3e65b43bded2b21e5c181d3c4c4c526c41ceab044289508458048b63352dfc379de373fd19a2c900c43524b75949e677cceda866f7f2bcc4844ef2e5dac5b804b4045e657c8156d1dcdb43cbf2f5e00a4f9255e3be2439436c4d0449a8d2c4c1a56bece98ea0fd68abaf12398039994aebffc692b9000e580479b4f4b28b5fe']
        ];
    }

    /**
     * @dataProvider encryptProvider
     */
    function testEncrypt($key, $plaintext, $ciphertext)
    {
        $ecb = new ECB(new Key(hex2bin($key)));
        $result = $ecb->encrypt(hex2bin($plaintext));
        $this->assertSame(hex2bin($ciphertext), $result);
    }

    /**
     * @dataProvider decryptProvider
     */
    function testDecrypt($key, $ciphertext, $plaintext)
    {
        $ecb = new ECB(new Key(hex2bin($key)));
        $result = $ecb->decrypt(hex2bin($ciphertext));
        $this->assertSame(hex2bin($plaintext), $result);
    }
}
