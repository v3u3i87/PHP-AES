<?php

# CAVS 11.1
# Config info for aes_values
# AESVS MCT test data for CBC
# State : Encrypt and Decrypt
# Key Length : 128
# Generated on Fri Apr 22 15:11:33 2011

namespace AES\Test;

use AES\CBC;
use AES\Key;

class CBCMCT128 extends \PHPUnit_Framework_TestCase
{
    function encryptProvider()
    {
        return [
            ['8809e7dd3a959ee5d8dbb13f501f2274', 'e5c0bb535d7d54572ad06d170a0e58ae', '1fd4ee65603e6130cfc2a82ab3d56c24', 'b127a5b4c4692d87483db0c3b0d11e64'],
            ['392e4269fefcb36290e601fce0ce3c10', 'b127a5b4c4692d87483db0c3b0d11e64', '4e18f8d377d3d03e497a05763a4d350a', 'b8b79b153b5d64f7723b0ea539713a91'],
            ['8199d97cc5a1d795e2dd0f59d9bf0681', 'b8b79b153b5d64f7723b0ea539713a91', '143a6cfb8cee0a96af453930ffe9c5e3', 'dd21bf193c6e16eb7fd7b2337fcc754e'],
            ['5cb86665f9cfc17e9d0abd6aa67373cf', 'dd21bf193c6e16eb7fd7b2337fcc754e', 'e4666ea8c05f4c236b4b02e72a62357e', '447918089f6237abbc914fd885c27fa4'],
            ['18c17e6d66adf6d5219bf2b223b10c6b', '447918089f6237abbc914fd885c27fa4', '374fd04480996cc20230979f39318c40', '312220dd22dccba6938eaff99a912538'],
            ['29e35eb044713d73b2155d4bb9202953', '312220dd22dccba6938eaff99a912538', '1ba2ef5ab7c1c403dadc313764f120bf', '496d5fabda7be688cbb38773e38c2ecc'],
            ['608e011b9e0adbfb79a6da385aac079f', '496d5fabda7be688cbb38773e38c2ecc', 'b4c6492b9c3db4ed37f13ca5f9add93f', 'ffc25b409f20d32c1b1441ce096de935'],
            ['9f4c5a5b012a08d762b29bf653c1eeaa', 'ffc25b409f20d32c1b1441ce096de935', '72207b356179458dcd5fb9d24e745c03', '46c439ecbdff702985fd429675fe660a'],
            ['d98863b7bcd578fee74fd960263f88a0', '46c439ecbdff702985fd429675fe660a', '726ddad8be0b14b2bed5d851ab751547', '50a36919fe26e5479d5534ba05d9f380'],
            ['892b0aae42f39db97a1aedda23e67b20', '50a36919fe26e5479d5534ba05d9f380', '5509d0df600077373ae0cde92dd38174', '0fd2d19323bb6aadb1e257ec1f2f10fc'],
            ['86f9db3d6148f714cbf8ba363cc96bdc', '0fd2d19323bb6aadb1e257ec1f2f10fc', '6b21c3e8899f68d0f8d39fa7d996b54a', '7068b78a1593ad894051b1d63bc51e21'],
            ['f6916cb774db5a9d8ba90be0070c75fd', '7068b78a1593ad894051b1d63bc51e21', 'f7d9892a9f7f47afaacac3999e6bdb9d', '5b6c0ecb7691120ecd15a20d1abdc74c'],
            ['adfd627c024a489346bca9ed1db1b2b1', '5b6c0ecb7691120ecd15a20d1abdc74c', '1fa89091b4c93101ef063ea52c2ad42e', 'ee13411de65caf7c05729647a46efe2d'],
            ['43ee2361e416e7ef43ce3faab9df4c9c', 'ee13411de65caf7c05729647a46efe2d', '64012ca8c80c0abcefe44057990ed262', 'ba29886d568e5f5ca9154bf27d6f920b'],
            ['f9c7ab0cb298b8b3eadb7458c4b0de97', 'ba29886d568e5f5ca9154bf27d6f920b', '272575419e4fd426e6162182a563ccf2', 'afc4643dffdc6fbc301c3f86a8238deb'],
            ['5603cf314d44d70fdac74bde6c93537c', 'afc4643dffdc6fbc301c3f86a8238deb', '37f52a2fa346548db97b43e309753d4a', '1855ed24876c24f64bfc5034655ce968'],
            ['4e562215ca28f3f9913b1bea09cfba14', '1855ed24876c24f64bfc5034655ce968', '7edfd0c796936f430f2c999de976f5b5', '3efe3ac0832c96787add518f37e8f237'],
            ['70a818d549046581ebe64a653e274823', '3efe3ac0832c96787add518f37e8f237', 'd76b12aa1ce7bb8d20cbe1a528f1efeb', '3081a99d40838b8f657187700e49a865'],
            ['4029b1480987ee0e8e97cd15306ee046', '3081a99d40838b8f657187700e49a865', '68b836a48e1ba761e680688b64090d30', '5e93242111c61574ae5be67943132f04'],
            ['1eba95691841fb7a20cc2b6c737dcf42', '5e93242111c61574ae5be67943132f04', 'e06cf0a7e6196cbe75b5ddd678f5d5b8', 'a1142eed0c385affde5c71d9f3cd6bd6'],
            ['bfaebb841479a185fe905ab580b0a494', 'a1142eed0c385affde5c71d9f3cd6bd6', '77424e5130066653ff123393269bcf9f', 'a5e474cfac40137a7561c7b8c6acb93d'],
            ['1a4acf4bb839b2ff8bf19d0d461c1da9', 'a5e474cfac40137a7561c7b8c6acb93d', '8b17f216b6bae32abb3fcc87ada14899', '44a31020308db67cb48cad4162e6c95c'],
            ['5ee9df6b88b404833f7d304c24fad4f5', '44a31020308db67cb48cad4162e6c95c', '29b47ab011e034ad3ba615c672f843c3', '07bfdabedc1cc1540cf23bd9ecb628b3'],
            ['595605d554a8c5d7338f0b95c84cfc46', '07bfdabedc1cc1540cf23bd9ecb628b3', '5fb77724af9c6b7cd64897d7b08764b0', '47091ac507824fbb7d0f9cb1f57cf604'],
            ['1e5f1f10532a8a6c4e8097243d300a42', '47091ac507824fbb7d0f9cb1f57cf604', 'fa6788ff2185890507b8fdb6cef41f44', 'ccfcab1d9587905594bff747020df056'],
            ['d2a3b40dc6ad1a39da3f60633f3dfa14', 'ccfcab1d9587905594bff747020df056', 'e7a5008aec1059d4dee8380f41cf3a9a', '8e8dd8a90e9c872b4eab3e2a2d0dd74c'],
            ['5c2e6ca4c8319d1294945e4912302d58', '8e8dd8a90e9c872b4eab3e2a2d0dd74c', 'ebf7d1b0f35f1db78199fabb1e8ce657', '63753d7cf1e890c933420665c10a4925'],
            ['3f5b51d839d90ddba7d6582cd33a647d', '63753d7cf1e890c933420665c10a4925', 'cbb9aeb795e5419a39a992e8d1271f36', 'e86d0f327aebbd6e663ee264089456b0'],
            ['d7365eea4332b0b5c1e8ba48dbae32cd', 'e86d0f327aebbd6e663ee264089456b0', '341beb353a436a28e985ded7d709a32a', 'c8d3d810a3dd24e705f17d89cb9d5a7a'],
            ['1fe586fae0ef9452c419c7c1103368b7', 'c8d3d810a3dd24e705f17d89cb9d5a7a', 'aa0a76881846bca5aac1643ac01ca147', '4fb18494823c8cd00e032ece30171f17'],
            ['5054026e62d31882ca1ae90f202477a0', '4fb18494823c8cd00e032ece30171f17', '6f7d323f7b4e79bc0505b035f3ceb39c', '615426a964ff4fcc56dfa63a6ef83dd0'],
            ['310024c7062c574e9cc54f354edc4a70', '615426a964ff4fcc56dfa63a6ef83dd0', '3048e121d30bcf1e1fe98c1fad003373', '1a16a1c853759a17146873ef16f84e06'],
            ['2b16850f5559cd5988ad3cda58240476', '1a16a1c853759a17146873ef16f84e06', '868af54094a6dc63ca4071ffe518e347', '90a5933d219c0cbebb9c34a6f62f3bee'],
            ['bbb3163274c5c1e73331087cae0b3f98', '90a5933d219c0cbebb9c34a6f62f3bee', '2e0c17bb7eaf60d744f0a8c7399af1b0', '96a4c553484a4181737c3e186b2620b5'],
            ['2d17d3613c8f8066404d3664c52d1f2d', '96a4c553484a4181737c3e186b2620b5', '8f6e4e389bdfe95d4a7f7ed911936b48', '61b725311b8af9ddf740b61fb6ed5dab'],
            ['4ca0f650270579bbb70d807b73c04286', '61b725311b8af9ddf740b61fb6ed5dab', 'f9abe541a55fe5e63ee53631d1a52bc8', '8c7715c7addc0c1dd17b9967a6643810'],
            ['c0d7e3978ad975a66676191cd5a47a96', '8c7715c7addc0c1dd17b9967a6643810', '029a2a95b9eeb6a995d8bbafa8667b93', 'a740637deb5640914c7e59da31193a69'],
            ['679780ea618f35372a0840c6e4bd40ff', 'a740637deb5640914c7e59da31193a69', '1469cf2c5f2e3024be1b76a280ba62ff', 'b0aefb01e733b0e2baf44b4ab77b5870'],
            ['d7397beb86bc85d590fc0b8c53c6188f', 'b0aefb01e733b0e2baf44b4ab77b5870', '999689c32050125dda7250c9c9aae0ec', 'c946a47986903f1a38ade946cd009acc'],
            ['1e7fdf92002cbacfa851e2ca9ec68243', 'c946a47986903f1a38ade946cd009acc', 'e86b3315ebe5831526faacd3f0e291ae', 'e86b67473b9131ec31d63c4a237f50d0'],
            ['f614b8d53bbd8b239987de80bdb9d293', 'e86b67473b9131ec31d63c4a237f50d0', 'f8498abeba9c30411e0efb405537acdf', '6132bc9d837dfd2e49e8f74e998f28f4'],
            ['97260448b8c0760dd06f29ce2436fa67', '6132bc9d837dfd2e49e8f74e998f28f4', '4f9a6c5fde1790a4ccbe599a1c469cfb', 'dcbf066619ba6eb5f1a5674b851bc8ff'],
            ['4b99022ea17a18b821ca4e85a12d3298', 'dcbf066619ba6eb5f1a5674b851bc8ff', '2962c4940731bb73693f4a35e800a331', '43bf3b75b9b6982de25c33d3c4bc0ed1'],
            ['0826395b18cc8095c3967d5665913c49', '43bf3b75b9b6982de25c33d3c4bc0ed1', 'df498a4299899bba1de40aa63c54219f', 'b371f1e8e4542a6ae6632bebdd8ce727'],
            ['bb57c8b3fc98aaff25f556bdb81ddb6e', 'b371f1e8e4542a6ae6632bebdd8ce727', 'f592483e8ac998ec60ab1508e3c01423', '3b0bb19cd280b36702d3a467f10e08e2'],
            ['805c792f2e1819982726f2da4913d38c', '3b0bb19cd280b36702d3a467f10e08e2', '79bceaa083676968b45babdf298bb1d7', 'ec9d36ff63b41bbc29eef08792a160b4'],
            ['6cc14fd04dac02240ec8025ddbb2b338', 'ec9d36ff63b41bbc29eef08792a160b4', '775bd0c291ddcf8fe0e0a197e902418d', '328fa4bb3017dccae1a8af98829e12b3'],
            ['5e4eeb6b7dbbdeeeef60adc5592ca18b', '328fa4bb3017dccae1a8af98829e12b3', 'ccba9e9d00b23695ab755b079c718d87', '5dd5b61d953ac466de030262dbb9b2d8'],
            ['039b5d76e8811a883163afa782951353', '5dd5b61d953ac466de030262dbb9b2d8', 'b68c9859d7362d49a02fa0d8d6915156', '2fab5cc036ef88f8709da14a9651c30a'],
            ['2c3001b6de6e927041fe0eed14c4d059', '2fab5cc036ef88f8709da14a9651c30a', '6fff5a9fe86d39f5ab05244ccdf670cd', '912fd64d65d7e8f9620b56f4e8167bd7'],
            ['bd1fd7fbbbb97a8923f55819fcd2ab8e', '912fd64d65d7e8f9620b56f4e8167bd7', '3cf5186ffd90436a432bade21709d59b', '127b626fbd0b8fbc1ecaad5865be1b13'],
            ['af64b59406b2f5353d3ff541996cb09d', '127b626fbd0b8fbc1ecaad5865be1b13', '471f1f48cd3de285891287667f9b6041', '92c0e245f40b2f5271371a86fa77f120'],
            ['3da457d1f2b9da674c08efc7631b41bd', '92c0e245f40b2f5271371a86fa77f120', 'd7b04698a32d7f084c5e22185ef21c75', '69a9cf73c16bda65ec91045e06c3c446'],
            ['540d98a233d20002a099eb9965d885fb', '69a9cf73c16bda65ec91045e06c3c446', '5acaa924ef0905700226c40537c53e32', '8b357f9ca8c0e414aa14e5bcec2f0a65'],
            ['df38e73e9b12e4160a8d0e2589f78f9e', '8b357f9ca8c0e414aa14e5bcec2f0a65', '321e82bcf421c42416f450621a1e366a', '3ca8fab10d4bcb43aa303aa14856bced'],
            ['e3901d8f96592f55a0bd3484c1a13373', '3ca8fab10d4bcb43aa303aa14856bced', '32112b6f2de57fb7b4cc181ccdc37764', '8020d87875c942a0e1bf5f989f412546'],
            ['63b0c5f7e3906df541026b1c5ee01635', '8020d87875c942a0e1bf5f989f412546', '1bf8215b2cd3b6a3ee781720889cc6d0', '26020d816487574ced0db0d8d90ff836'],
            ['45b2c87687173ab9ac0fdbc487efee03', '26020d816487574ced0db0d8d90ff836', '423e902f68f12b7bc25f50826286ad18', '7412b3c07ae127dda21ec5eae4fc0e9e'],
            ['31a07bb6fdf61d640e111e2e6313e09d', '7412b3c07ae127dda21ec5eae4fc0e9e', 'f60850cc52a6efbcdffc80a5df133d6b', '9ac4a477d6aca9fcd9815f3a8ed883df'],
            ['ab64dfc12b5ab498d7904114edcb6342', '9ac4a477d6aca9fcd9815f3a8ed883df', 'b9aef36452c44b79441d5dd1de6f8dd5', '1d50729ebd80e7c2171b507ff04f2f7f'],
            ['b634ad5f96da535ac08b116b1d844c3d', '1d50729ebd80e7c2171b507ff04f2f7f', '86bd16ce915e72076c8fa046966dcfc2', 'b682a694a141a316ccb8242be68d1d5c'],
            ['00b60bcb379bf04c0c333540fb095161', 'b682a694a141a316ccb8242be68d1d5c', 'e5d1a803fcc6bbd1ba813f5b83677ca9', '3eb3ab214a94b7c33329bce0ba04750d'],
            ['3e05a0ea7d0f478f3f1a89a0410d246c', '3eb3ab214a94b7c33329bce0ba04750d', '8fa2c8a1f96883771ef6746f277cd457', 'ccbd25f85cc9b50b9834cb19859d32bd'],
            ['f2b8851221c6f284a72e42b9c49016d1', 'ccbd25f85cc9b50b9834cb19859d32bd', '61d98e21ad14164edb72653bb7a526f4', '5244c234b01178d4dd00d7f592eaa84b'],
            ['a0fc472691d78a507a2e954c567abe9a', '5244c234b01178d4dd00d7f592eaa84b', '55f99e649f5e1680195ad7971708e2a5', '13e7d46f7fedb1c1acd81f7c0c125071'],
            ['b31b9349ee3a3b91d6f68a305a68eeeb', '13e7d46f7fedb1c1acd81f7c0c125071', 'e99b3a2c2071cdac45b39ec7a0f9ca0d', 'c786e8bea4983ad65640bbe6cccfaca9'],
            ['749d7bf74aa2014780b631d696a74242', 'c786e8bea4983ad65640bbe6cccfaca9', 'a240866322514405332b18804b3ad8f5', '1b9329bb69c7b9739ce5556547986bea'],
            ['6f0e524c2365b8341c5364b3d13f29a8', '1b9329bb69c7b9739ce5556547986bea', 'f9f085a75c1842610df4a20e99af91a2', '7f00f5584fbe0d651ee81e6db8c31cc8'],
            ['100ea7146cdbb55102bb7ade69fc3560', '7f00f5584fbe0d651ee81e6db8c31cc8', '6a620100221bbadb95a1d5b8a3abae48', '89284bd837993773f3d809c84ee757bc'],
            ['9926eccc5b428222f1637316271b62dc', '89284bd837993773f3d809c84ee757bc', '4bbe2c9ca1482ca3750b3287ce85d449', '68f01a398085d727726063715ab1688a'],
            ['f1d6f6f5dbc75505830310677daa0a56', '68f01a398085d727726063715ab1688a', '8f6dc5c55b1ed743a87c7dda2f5a518f', '5046338fa6118a25fb55a03110d887a1'],
            ['a190c57a7dd6df207856b0566d728df7', '5046338fa6118a25fb55a03110d887a1', '6643a84cac2554185810c942f418974b', '299a5e6f0d05c8eb5307d30adfa74788'],
            ['880a9b1570d317cb2b51635cb2d5ca7f', '299a5e6f0d05c8eb5307d30adfa74788', '83ee41d7dfe2a0161b12ef4eb88a5a1d', '28669f002fb3e170f2834705a7a08272'],
            ['a06c04155f60f6bbd9d224591575480d', '28669f002fb3e170f2834705a7a08272', '8996026bd9cb6a8bb9e771e8fa4afbd7', '923c5d2182c081f3048fd721f1ea5c69'],
            ['32505934dda07748dd5df378e49f1464', '923c5d2182c081f3048fd721f1ea5c69', '1ce48f3d65f1e34f776b043f4c7dff72', '8051785bbc1cc24f60a27be65fc5270d'],
            ['b201216f61bcb507bdff889ebb5a3369', '8051785bbc1cc24f60a27be65fc5270d', '0667282c650e0e96f33c3281457e1f8f', 'cb8ac99c2eaa43190e29b3434c4ba1e5'],
            ['798be8f34f16f61eb3d63bddf711928c', 'cb8ac99c2eaa43190e29b3434c4ba1e5', 'd60ed6362685225fbcd1bddc0fb34367', '89d792f078357268acb84485125402eb'],
            ['f05c7a03372384761f6e7f58e5459067', '89d792f078357268acb84485125402eb', '21c06f224544b2e2af0fa6ab1a53ff5b', '7edd61972d3c87cc1b06cf8ec1143d17'],
            ['8e811b941a1f03ba0468b0d62451ad70', '7edd61972d3c87cc1b06cf8ec1143d17', 'fab411904a913f88c0057de4b8bc37a5', '92ae30acf410268fc579d8e952f653fd'],
            ['1c2f2b38ee0f2535c111683f76a7fe8d', '92ae30acf410268fc579d8e952f653fd', 'b9b5be84b1145cc2bb76fa6bbaf75d37', '36ae9657c3d4e9b628937564ed4fae87'],
            ['2a81bd6f2ddbcc83e9821d5b9be8500a', '36ae9657c3d4e9b628937564ed4fae87', '99c275aa39ff44e70773e432538b8ed1', '9cc460f816be093c8e799611127fe2a2'],
            ['b645dd973b65c5bf67fb8b4a8997b2a8', '9cc460f816be093c8e799611127fe2a2', '52c618c610497e2b72b9bbebacd51123', 'a59f54ef1f871f76f745cd0d75a065f8'],
            ['13da897824e2dac990be4647fc37d750', 'a59f54ef1f871f76f745cd0d75a065f8', 'ebc90b23c2837f950a0eed0690ba4ba0', 'c40cefc70fb3013b866d36040fba4d09'],
            ['d7d666bf2b51dbf216d37043f38d9a59', 'c40cefc70fb3013b866d36040fba4d09', '7023dd22e859e82804ec3b5fd314bdb8', 'dc9badde27ecdef751ddaf0f39692869'],
            ['0b4dcb610cbd0505470edf4ccae4b230', 'dc9badde27ecdef751ddaf0f39692869', '18ff452e7a5fe276b0ee72cec78d3b25', '21da7b3f535c63e021ebb8162693784e'],
            ['2a97b05e5fe166e566e5675aec77ca7e', '21da7b3f535c63e021ebb8162693784e', 'a0b7f414173e39a0cfdd412a87ae45ac', 'dbe3808aed010189d884ea686cbf1863'],
            ['f17430d4b2e0676cbe618d3280c8d21d', 'dbe3808aed010189d884ea686cbf1863', 'a9ff2f7060821b50eb9b756d24e1291b', 'c3d7fa4926a1c6fef09d60b6b234c70c'],
            ['32a3ca9d9441a1924efced8432fc1511', 'c3d7fa4926a1c6fef09d60b6b234c70c', '1be554312fed95d320550e1d4502941c', '38ea5e869ba7a8096b825cab0153dd8a'],
            ['0a49941b0fe6099b257eb12f33afc89b', '38ea5e869ba7a8096b825cab0153dd8a', '9a42d7aac8283ffbe538cb1af3f15881', 'cc6b1efa715d61e04a4c07e3eaca3249'],
            ['c6228ae17ebb687b6f32b6ccd965fad2', 'cc6b1efa715d61e04a4c07e3eaca3249', '07491f55e2fda09e3a3e9d1b32c897cf', 'f89d8c43c3c4adb5f9ad040558e53695'],
            ['3ebf06a2bd7fc5ce969fb2c98180cc47', 'f89d8c43c3c4adb5f9ad040558e53695', 'f80f7f8ae631b81a5f7aceba7fbea0c1', '7cdff3c7ed22ef18634038e7c5e0912c'],
            ['4260f565505d2ad6f5df8a2e44605d6b', '7cdff3c7ed22ef18634038e7c5e0912c', '426ee460a67506d4069c784d8f9db1d5', '17147e78393997ff3cae65de18a0002f'],
            ['55748b1d6964bd29c971eff05cc05d44', '17147e78393997ff3cae65de18a0002f', '56bb4b707666683794fea1512ca1694c', '33b6c5e6c693ad06449b7c196e90e14c'],
            ['66c24efbaff7102f8dea93e93250bc08', '33b6c5e6c693ad06449b7c196e90e14c', 'f5fbffe145ed086c4bad544187c64f1f', '98b89be2a520426a0db8b6aa65e3d197'],
            ['fe7ad5190ad752458052254357b36d9f', '98b89be2a520426a0db8b6aa65e3d197', 'f0490756ad8e60e19fefb2a67fd845d7', 'c5ce3145b5c7c2a2dea9373e9bce898c'],
            ['3bb4e45cbf1090e75efb127dcc7de413', 'c5ce3145b5c7c2a2dea9373e9bce898c', '5215da75cb0a7be1e6d492278f516aec', '14a4b763b47b8d64876b1b44574aaadf'],
            ['2f10533f0b6b1d83d99009399b374ecc', '14a4b763b47b8d64876b1b44574aaadf', '731d34c340403ba793d7693300d37a33', '978544d6459c2c686104e7704d282e9e'],
            ['b89517e94ef731ebb894ee49d61f6052', '978544d6459c2c686104e7704d282e9e', '8ee9809143de73316dbccfa324da35d2', '4d7a736fd4593c5fd4a77f8e91850036'],
            ['f5ef64869aae0db46c3391c7479a6064', '4d7a736fd4593c5fd4a77f8e91850036', 'b474da68b75fbe551a0b4aaa3b5beb5d', '2d0a2d6f479098c96c16ae036f33a740'],
            ['d8e549e9dd3e957d00253fc428a9c724', '2d0a2d6f479098c96c16ae036f33a740', 'b01fbdb77120a90e676b640cf1f720b6', '7bed7671c8913aa1330f193761523e67']
        ];
    }

    function decryptProvider()
    {
        return [
            ['287b07c78f8e3e1be7c41b3d96c04e6e', '41b461f9464fd515d25413b4241002b8', '7c54923b0490a9d4de4ec1ce6790aa4d', '2805d10b127fcd1da528faad4eb2e10b'],
            ['007ed6cc9df1f30642ece190d872af65', '2805d10b127fcd1da528faad4eb2e10b', 'a7b760be9237b49e8dad24a6063523a6', '743b755c0d1d287ffd6ccebeb3eee6b3'],
            ['7445a39090ecdb79bf802f2e6b9c49d6', '743b755c0d1d287ffd6ccebeb3eee6b3', '79414e51819ecaafbbb6fd04a3b42fad', 'b863f5f51257a388dfd45f57b171fe70'],
            ['cc26566582bb78f160547079daedb7a6', 'b863f5f51257a388dfd45f57b171fe70', '4140daad9ac92104cafbc5d73f561e15', '093992da8cf4b1d740423f8ce880bf57'],
            ['c51fc4bf0e4fc92620164ff5326d08f1', '093992da8cf4b1d740423f8ce880bf57', '9cc3ac032367f0991952dd77d9c02b5b', 'ba903eb56bd88f3da6a99290603da1f4'],
            ['7f8ffa0a6597461b86bfdd655250a905', 'ba903eb56bd88f3da6a99290603da1f4', '5afc417529ce881dea1471d9070f1e8c', '8f38711caf4c68eb732f8a20d3ff76b1'],
            ['f0b78b16cadb2ef0f590574581afdfb4', '8f38711caf4c68eb732f8a20d3ff76b1', 'a315ab0bdae51a44273b6a0dfc283d72', 'af812bf845802743c3d9229d840a79cd'],
            ['5f36a0ee8f5b09b3364975d805a5a679', 'af812bf845802743c3d9229d840a79cd', '59c4d87b6baf63dba72bf1cf2e18c7c1', 'e4b02aff90e60253f4ab888dcd443346'],
            ['bb868a111fbd0be0c2e2fd55c8e1953f', 'e4b02aff90e60253f4ab888dcd443346', 'd0fa28c2bd2afa59c9f6c3467cc43e77', '4f20862976ce4b543d4810348630294c'],
            ['f4a60c38697340b4ffaaed614ed1bc73', '4f20862976ce4b543d4810348630294c', '76d9eb0e1e798a5930c623fae0d588ca', '3288d61610598b22e33bc6eeacd99b01'],
            ['c62eda2e792acb961c912b8fe2082772', '3288d61610598b22e33bc6eeacd99b01', 'b6c4f83631ba2e0e28031edb417a7bf0', '02a8aa4a58707df1f7ea8e25e63c9cbf'],
            ['c4867064215ab667eb7ba5aa0434bbcd', '02a8aa4a58707df1f7ea8e25e63c9cbf', '0e57da5dcd91177ee2b6aecde87ce61e', '0b5224818cece38c5d644f28beaeb95c'],
            ['cfd454e5adb655ebb61fea82ba9a0291', '0b5224818cece38c5d644f28beaeb95c', '5fd65d268f651cb9b23516e98ca2de50', 'b2c44002b67472595daefc2eda154674'],
            ['7d1014e71bc227b2ebb116ac608f44e5', 'b2c44002b67472595daefc2eda154674', '58eea0f0bcdd28578a140e6ca82c0b01', '3517c46bb5d67291c1565287b3736475'],
            ['4807d08cae1455232ae7442bd3fc2090', '3517c46bb5d67291c1565287b3736475', '704350a33a392a1ca5f1f2405c811259', '644ff53d8b03bc1dd24f1c148ef022cb'],
            ['2c4825b12517e93ef8a8583f5d0c025b', '644ff53d8b03bc1dd24f1c148ef022cb', '61aee53a19da9e4d27ed203b4f204914', '3421511552a4d350206db3b15807759d'],
            ['186974a477b33a6ed8c5eb8e050b77c6', '3421511552a4d350206db3b15807759d', '646f2367f25b3c9a0c3b6576edf7e5da', '65c06fb332326f840ab796902245ba40'],
            ['7da91b17458155ead2727d1e274ecd86', '65c06fb332326f840ab796902245ba40', '708dbcf7c074aa120ba0f54bf92f1608', '21487ade7219aadc335a687c5546dbda'],
            ['5ce161c93798ff36e12815627208165c', '21487ade7219aadc335a687c5546dbda', 'ddf5733d051fbf371ac1edb3d8767dc5', 'c3bae05de23293b5312596b05f2b04f0'],
            ['9f5b8194d5aa6c83d00d83d22d2312ac', 'c3bae05de23293b5312596b05f2b04f0', 'f12006ae9a345dc65c3789373353976f', '892e1cec70fc3a0c9e58cb7f403adc64'],
            ['16759d78a556568f4e5548ad6d19cec8', '892e1cec70fc3a0c9e58cb7f403adc64', '1f758263d62eb6fd7c7a5666620e107c', 'c42dc868434e4978afbf1f9fe2a41832'],
            ['d2585510e6181ff7e1ea57328fbdd6fa', 'c42dc868434e4978afbf1f9fe2a41832', '7854dd5ec927f83243a7254794b91bcd', '7d68bce738ca71f145f4ff87efebcb14'],
            ['af30e9f7ded26e06a41ea8b560561dee', '7d68bce738ca71f145f4ff87efebcb14', '9130d84e317f633167b1493f10836761', '403c77d64630e6328ed305dba91b4221'],
            ['ef0c9e2198e288342acdad6ec94d5fcf', '403c77d64630e6328ed305dba91b4221', '7517ea8c43ade8102e2356ca34e7186d', '06a79b34116ce0ed1f37187a0f2d15c3'],
            ['e9ab0515898e68d935fab514c6604a0c', '06a79b34116ce0ed1f37187a0f2d15c3', 'bc65e9d2217cc8d7a49f2c9881eb3dbf', '3a5231507ea563c04b60153f75e6f858'],
            ['d3f93445f72b0b197e9aa02bb386b254', '3a5231507ea563c04b60153f75e6f858', '3fa03fa088b9e778147418f208c8fa5d', '0c8cc1e5c6725c99c87d540ec2add993'],
            ['df75f5a031595780b6e7f425712b6bc7', '0c8cc1e5c6725c99c87d540ec2add993', '19c26cbb9dd80ddd48a7df807d7c1a0f', '1b09f1a9020e744edd603b177d57bdb6'],
            ['c47c0409335723ce6b87cf320c7cd671', '1b09f1a9020e744edd603b177d57bdb6', '699a10255b898ea72bc63e054d10d391', '07e3145f0f6d3fa61df66bc7a779100e'],
            ['c39f10563c3a1c687671a4f5ab05c67f', '07e3145f0f6d3fa61df66bc7a779100e', '264f193f1817f44a3b5d89db22e60bbc', '64e2676b56a44af6f849990448dde2e3'],
            ['a77d773d6a9e569e8e383df1e3d8249c', '64e2676b56a44af6f849990448dde2e3', 'b13e63b947738731a4b57fe8862aa98a', '2786a7e5333d099cc3368cd3868ea18d'],
            ['80fbd0d859a35f024d0eb12265568511', '2786a7e5333d099cc3368cd3868ea18d', '82c3ce7c4d6fda2a264927879f846a75', 'ab612a2ab2c8006d7d3239f6de8aac55'],
            ['2b9afaf2eb6b5f6f303c88d4bbdc2944', 'ab612a2ab2c8006d7d3239f6de8aac55', '8268a54d0f960cd9340edcce04843c82', '65b5f36e257d6709d3f7b85927b8fa7d'],
            ['4e2f099cce163866e3cb308d9c64d339', '65b5f36e257d6709d3f7b85927b8fa7d', '24271e61d2061cde1c76650870890e84', '1e941682592b109f4d4c9d32d129c503'],
            ['50bb1f1e973d28f9ae87adbf4d4d163a', '1e941682592b109f4d4c9d32d129c503', '4773ba500769a3da30893271c5a8beed', '8a35e53387b26d2eebe430401c75b4d0'],
            ['da8efa2d108f45d745639dff5138a2ea', '8a35e53387b26d2eebe430401c75b4d0', '24f4c4c019990de0389cee5ede56e34b', 'd8c6473883ef7d792f0cb95efc612b2e'],
            ['0248bd15936038ae6a6f24a1ad5989c4', 'd8c6473883ef7d792f0cb95efc612b2e', 'a9f962c52db2c2239242677660aa4292', 'd30a61503b3482fee7a6ff96c185df95'],
            ['d142dc45a854ba508dc9db376cdc5651', 'd30a61503b3482fee7a6ff96c185df95', '683bddc63306485185b55095be6c1262', '35c3832066247f1eca792cd5ab099480'],
            ['e4815f65ce70c54e47b0f7e2c7d5c2d1', '35c3832066247f1eca792cd5ab099480', '618c71856b4e9eb62bf9330d61095ab2', '17ae4ddf59b30e46c84e65d8a224be03'],
            ['f32f12ba97c3cb088ffe923a65f17cd2', '17ae4ddf59b30e46c84e65d8a224be03', '9536e87c5d6cb6627e46ef2b067e9b46', 'a2f3242e26d30f467d58abc1ba688d43'],
            ['51dc3694b110c44ef2a639fbdf99f191', 'a2f3242e26d30f467d58abc1ba688d43', '4030df680831758e38581e6db78d5806', '25529af0af24f538d5571d431914cdbc'],
            ['748eac641e34317627f124b8c68d3c2d', '25529af0af24f538d5571d431914cdbc', 'e0bef917a25621138f5b444b2ce36985', 'd6bfc5fcfe83db2d9a8a84e8881bb8e2'],
            ['a2316998e0b7ea5bbd7ba0504e9684cf', 'd6bfc5fcfe83db2d9a8a84e8881bb8e2', 'eed8ce1bab9e406a1291aa20f38c0abf', 'e118c7bb465aa7fe8ae31ddc04a57cd3'],
            ['4329ae23a6ed4da53798bd8c4a33f81c', 'e118c7bb465aa7fe8ae31ddc04a57cd3', 'bbdcbcf7e01253b4ecd84194266895d6', 'dbf7a677385be8bf89fdd3bd1f1f54c8'],
            ['98de08549eb6a51abe656e31552cacd4', 'dbf7a677385be8bf89fdd3bd1f1f54c8', 'ceaa87ea18c7344715c9d0f431073ec0', '2a6325473ba029a44ee8354c1b3cd5d8'],
            ['b2bd2d13a5168cbef08d5b7d4e10790c', '2a6325473ba029a44ee8354c1b3cd5d8', '0dd93e6b01ef7a8386372e646eb6fb87', '778cb1a53f488748c7582afd9db7c21f'],
            ['c5319cb69a5e0bf637d57180d3a7bb13', '778cb1a53f488748c7582afd9db7c21f', 'c87d49014efefc19b5e23f14d41f3dbd', 'd25d1b52fb067fe5997cfcc3c4b655a2'],
            ['176c87e461587413aea98d431711eeb1', 'd25d1b52fb067fe5997cfcc3c4b655a2', '5856b566cbdd913e1f7b0c4d0c5c458e', '34687674ac076fde71257888564c6316'],
            ['2304f190cd5f1bcddf8cf5cb415d8da7', '34687674ac076fde71257888564c6316', 'a1d78ad47341bcdf23c28f4087c79171', '597e7ee936d32e92a6253a27a4ebe68a'],
            ['7a7a8f79fb8c355f79a9cfece5b66b2d', '597e7ee936d32e92a6253a27a4ebe68a', '5aa7c85d46be7b4a203b96d592497aef', 'e26d1a95a83f99ff1a17f34c6da17492'],
            ['981795ec53b3aca063be3ca088171fbf', 'e26d1a95a83f99ff1a17f34c6da17492', '635a71055e05459bfdb531369ac82f42', '42bf21efbb7e119a6038e76ac748cbbb'],
            ['daa8b403e8cdbd3a0386dbca4f5fd404', '42bf21efbb7e119a6038e76ac748cbbb', 'dc24d856dcba9eb2a8fd5e5114102bd0', '52990d51cb26c2bf44baf37ed58a76c3'],
            ['8831b95223eb7f85473c28b49ad5a2c7', '52990d51cb26c2bf44baf37ed58a76c3', '849928acd355ff61aac0e9ca852ec6ad', 'acb9306d5e5ffec55b128d8ae68876e8'],
            ['2488893f7db481401c2ea53e7c5dd42f', 'acb9306d5e5ffec55b128d8ae68876e8', '3572a5a1a7c9f0820b0c1ce9e389268a', '1f6ac3413a655073ab9b5a7df0e804f7'],
            ['3be24a7e47d1d133b7b5ff438cb5d0d8', '1f6ac3413a655073ab9b5a7df0e804f7', 'e0d8da95bb35d21b315e24255c47144b', '207edccc1bb8497bc2e9d00d33d27d3b'],
            ['1b9c96b25c699848755c2f4ebf67ade3', '207edccc1bb8497bc2e9d00d33d27d3b', '66bcf1cf975f2a0443c840e00e3c746a', '6303fb3c2c758a048673a2f03c93edb4'],
            ['789f6d8e701c124cf32f8dbe83f44057', '6303fb3c2c758a048673a2f03c93edb4', '2b209ebdb174a9e8bc1b2ae432c46d2c', 'd1fcfc18be2a7f3bc8ba51fbb196cbbb'],
            ['a9639196ce366d773b95dc4532628bec', 'd1fcfc18be2a7f3bc8ba51fbb196cbbb', 'eb8e77233abbcc20a02aa93fc91f7d40', '6d4afce33126729fa4fc9dc19a666290'],
            ['c4296d75ff101fe89f694184a804e97c', '6d4afce33126729fa4fc9dc19a666290', '03169a39cf00b6a0bdb611658ae49b9b', 'd0e049b20d9ae5eb9a3c33be19071976'],
            ['14c924c7f28afa030555723ab103f00a', 'd0e049b20d9ae5eb9a3c33be19071976', '9dad2b5e10b7422ed03acc02626b17a9', '8c2b982449b13b9a5c934745edeace59'],
            ['98e2bce3bb3bc19959c6357f5ce93e53', '8c2b982449b13b9a5c934745edeace59', '653193da380f3cb6ae9d925d7066c571', '11ff2eccf57579029137717b1b07433c'],
            ['891d922f4e4eb89bc8f1440447ee7d6f', '11ff2eccf57579029137717b1b07433c', '56d37e16fca9f7627954bb209f76fc7c', '1f81e5710c8cd2bf8b02bb18eac74f5a'],
            ['969c775e42c26a2443f3ff1cad293235', '1f81e5710c8cd2bf8b02bb18eac74f5a', 'efa8a39e92ebb232ba66669052ff9898', 'becc4f2d78cf028b60ae80935eef9b56'],
            ['285038733a0d68af235d7f8ff3c6a963', 'becc4f2d78cf028b60ae80935eef9b56', 'ba342a16605b2d280f4fc82fcd75f2fc', '7f3299e395e335bc99127e3942d6a0da'],
            ['5762a190afee5d13ba4f01b6b11009b9', '7f3299e395e335bc99127e3942d6a0da', 'c8caa0322499e26c6337cf6d657f6ea5', '9d76b20b2544abd3635a3ce96e98f6e7'],
            ['ca14139b8aaaf6c0d9153d5fdf88ff5e', '9d76b20b2544abd3635a3ce96e98f6e7', 'd12d1bae16789b8f04e730a4a42635a4', 'ec0b90a25ff32ceb06e19374cafaea15'],
            ['261f8339d559da2bdff4ae2b1572154b', 'ec0b90a25ff32ceb06e19374cafaea15', '750be0fbcc11854150ec578f05fa01cb', 'e2f48db4be4eeed0384ddbb07eb663c1'],
            ['c4eb0e8d6b1734fbe7b9759b6bc4768a', 'e2f48db4be4eeed0384ddbb07eb663c1', '84a663aaa187761b9a2baa50ff60c115', '463c0813d05650fb31fdc4312e6d5e73'],
            ['82d7069ebb416400d644b1aa45a928f9', '463c0813d05650fb31fdc4312e6d5e73', 'd3f421efc3704f6965d690f0b7a49413', '4e3203a8a80aa7ca550f78c92b38af22'],
            ['cce50536134bc3ca834bc9636e9187db', '4e3203a8a80aa7ca550f78c92b38af22', 'b68a3d583190adb8c1197a8e41f1c5f9', 'c8c37ddbce6e1b36551c8cf02be13841'],
            ['042678eddd25d8fcd65745934570bf9a', 'c8c37ddbce6e1b36551c8cf02be13841', 'e5e1604f4106a479f75ad8840d196189', '08d95666fb0dd81efb1b801232fe6ce4'],
            ['0cff2e8b262800e22d4cc581778ed37e', '08d95666fb0dd81efb1b801232fe6ce4', '054e72934e3dfd33659df53070a68da6', '66b9dc4f8f076e7bfceff887ba70c62c'],
            ['6a46f2c4a92f6e99d1a33d06cdfe1552', '66b9dc4f8f076e7bfceff887ba70c62c', 'dc1d609ba59a9018f15214a81bce9545', '7702492b61a36a1c45fd6120ecf801d1'],
            ['1d44bbefc88c0485945e5c2621061483', '7702492b61a36a1c45fd6120ecf801d1', '291c772fcade1b9d93e5319a99a100d5', 'c89b1c348fb741dd347cb16e9674b854'],
            ['d5dfa7db473b4558a022ed48b772acd7', 'c89b1c348fb741dd347cb16e9674b854', '6ec35b8b75671c8113c03a863db7ef66', '461fe728f4dacaadca23b53e0f57acd3'],
            ['93c040f3b3e18ff56a015876b8250004', '461fe728f4dacaadca23b53e0f57acd3', 'aaf8fc40bfb2a2c4d2a87fa72249eca7', '3a67246e3efa5011b4375c1f7a38feaa'],
            ['a9a7649d8d1bdfe4de360469c21dfeae', '3a67246e3efa5011b4375c1f7a38feaa', '8557892bf6a4750541dcf771e71d7fc7', '6c52ab9407d1ffeb1401a3e8a9af2562'],
            ['c5f5cf098aca200fca37a7816bb2dbcc', '6c52ab9407d1ffeb1401a3e8a9af2562', 'd3c94898b31559c23308faf2d840cc18', 'd0ffa38465719b43dc03fd04f593ef3e'],
            ['150a6c8defbbbb4c16345a859e2134f2', 'd0ffa38465719b43dc03fd04f593ef3e', '776455c8f7f9e5213147cdbcf81a9c29', 'a5b8ec0ab1446dff7ca65eefdecda543'],
            ['b0b280875effd6b36a92046a40ec91b1', 'a5b8ec0ab1446dff7ca65eefdecda543', '55dd71ef65c6d454f4838816c5fa73c9', '4f87bcd174900c60360ecc2aadbd2e3a'],
            ['ff353c562a6fdad35c9cc840ed51bf8b', '4f87bcd174900c60360ecc2aadbd2e3a', 'bac4cb5f9d601007b73ac6873238409a', '1bf05ab23bad338eccaef661472c088e'],
            ['e4c566e411c2e95d90323e21aa7db705', '1bf05ab23bad338eccaef661472c088e', '7fd273e73a9ed00621ef61b2effc5055', 'ce048f07a66ffe1e4a767bd4c0f0405b'],
            ['2ac1e9e3b7ad1743da4445f56a8df75e', 'ce048f07a66ffe1e4a767bd4c0f0405b', '30c5a203491f121d403a65a2889f4607', '3a743151166fef45f3d3877c307b7c35'],
            ['10b5d8b2a1c2f8062997c2895af68b6b', '3a743151166fef45f3d3877c307b7c35', '0bec1648fd76d5e5191b283c8e1a28ad', '3ddd0f566fb60c1a98c0b5fe10f8709b'],
            ['2d68d7e4ce74f41cb15777774a0efbf0', '3ddd0f566fb60c1a98c0b5fe10f8709b', 'f623e08c929a8ee23837355da41dc9d6', '2a75e30bfb46ac36bcdc1c3d473f9da3'],
            ['071d34ef3532582a0d8b6b4a0d316653', '2a75e30bfb46ac36bcdc1c3d473f9da3', '0ae42fd4d075d6f13e62fb00cf18f3be', '8e15feea90c6cb7d5aa3c69e63f53d4f'],
            ['8908ca05a5f493575728add46ec45b1c', '8e15feea90c6cb7d5aa3c69e63f53d4f', 'c62542f3cf5caf7e856d27ca26e1ec2e', '6cb1475177bc8ae3325e13a1e5063fc0'],
            ['e5b98d54d24819b46576be758bc264dc', '6cb1475177bc8ae3325e13a1e5063fc0', '24f732857c55c2918f7e67a4f1b111f2', 'e63291f31d9d8e149b9b7a56e397049a'],
            ['038b1ca7cfd597a0feedc42368556046', 'e63291f31d9d8e149b9b7a56e397049a', '0c99a31b722baa5063abe6185a62e8db', 'c5e9741d95827a083d824c1362df6015'],
            ['c66268ba5a57eda8c36f88300a8a0053', 'c5e9741d95827a083d824c1362df6015', 'c48f29a5f73f2dfe76dc4e6947832287', '83bb3288a01213eb8ab68d154ef66392'],
            ['45d95a32fa45fe4349d90525447c63c1', '83bb3288a01213eb8ab68d154ef66392', '33e25b99344b304e0ce13a66d2bee6e5', 'fde5f6a1f28278a0fbb1317df4de3c08'],
            ['b83cac9308c786e3b2683458b0a25fc9', 'fde5f6a1f28278a0fbb1317df4de3c08', 'ba91c5d6863897524a7d2b3ffda5752b', '033d791f6ed5d4fca44d08e9644d2649'],
            ['bb01d58c6612521f16253cb1d4ef7980', '033d791f6ed5d4fca44d08e9644d2649', '7881266b60d1cce988a75801fac44180', 'e84bc6b185b636fc488ac4e8754e9337'],
            ['534a133de3a464e35eaff859a1a1eab7', 'e84bc6b185b636fc488ac4e8754e9337', 'c33ffb639ef7a6a2ed7f8f3f520cf166', '253ad128629e8adbc469dea7fdc9a6bc'],
            ['7670c215813aee389ac626fe5c684c0b', '253ad128629e8adbc469dea7fdc9a6bc', '2db34856e6404256907e74f48bfa234b', 'c3d685f91ad2bc68beea706e5d5b5630'],
            ['b5a647ec9be85250242c569001331a3b', 'c3d685f91ad2bc68beea706e5d5b5630', '3597b8080c07872a31e861a029242af1', '6dfa98efcc40db6eda63a72b96701b61'],
            ['d85cdf0357a8893efe4ff1bb9743015a', '6dfa98efcc40db6eda63a72b96701b61', '38ba8fbf7dbb5dc4ea23909266775cde', 'bd99f4480a8f2685d54c51043be2acdc'],
            ['65c52b4b5d27afbb2b03a0bfaca1ad86', 'bd99f4480a8f2685d54c51043be2acdc', '5d1ce3a87a41c1bbd61c9fb4efd215c6', '055132d8074e8b9284de7e257cd0ace8'],
            ['609419935a692429afddde9ad071016e', '055132d8074e8b9284de7e257cd0ace8', 'b338fc78d6d70cd21cea8f4d2c416d10', 'dc64a59708b5820f98173cc08d105648'],
            ['bcf0bc0452dca62637cae25a5d615726', 'dc64a59708b5820f98173cc08d105648', 'b24ed2df68bb4618d7d789a466ff77ac', 'ef2a26c3e840b0f06ab139f75602a763'],
            ['53da9ac7ba9c16d65d7bdbad0b63f045', 'ef2a26c3e840b0f06ab139f75602a763', '17837def8d21e27571d20e9688525879', '4769317b0562c45949c18b3855f8bf4a']
        ];
    }

    /**
     * @dataProvider encryptProvider
     */
    function testEncrypt($key, $iv, $plaintext, $ciphertext)
    {
        $cbc = new CBC(new Key(hex2bin($key)), hex2bin($iv));
        $lastCiphertext = hex2bin($plaintext);

        // http://csrc.nist.gov/groups/STM/cavp/documents/aes/AESAVS.pdf 6.4.2 --- OK...

        $nextPlaintext = $cbc->encrypt($lastCiphertext);
        $lastCiphertext = hex2bin($iv);

        for ($i = 1; $i < 1000; $i++) {
            $thisCiphertext = $cbc->encrypt($lastCiphertext);
            $lastCiphertext = $nextPlaintext;
            $nextPlaintext = $thisCiphertext;
        }

        $this->assertSame(hex2bin($ciphertext), $nextPlaintext);
    }

    /**
     * @dataProvider decryptProvider
     */
    function testDecrypt($key, $iv, $ciphertext, $plaintext)
    {
        $cbc = new CBC(new Key(hex2bin($key)), hex2bin($iv));
        $lastPlaintext = hex2bin($ciphertext);

        $nextCiphertext = $cbc->decrypt($lastPlaintext);
        $lastPlaintext = hex2bin($iv);

        for ($i = 1; $i < 1000; $i++) {
            $thisPlaintext = $cbc->decrypt($lastPlaintext);
            $lastPlaintext = $nextCiphertext;
            $nextCiphertext = $thisPlaintext;
        }

        $this->assertSame(hex2bin($plaintext), $nextCiphertext);
    }
}
