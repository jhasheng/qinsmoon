<?php
/**
 * Created by PhpStorm.
 * User: jhasheng@hotmail.com
 * Date: 16/11/1
 * Time: 10:27
 */
if (!file_exists(__DIR__ . '/private.key')) {
    $config = array(
        'digest_alg' => 'sha512',
        'private_key_bits' => 4096,
        'private_key_type' => OPENSSL_KEYTYPE_RSA,
    );

    $privateResource = openssl_pkey_new($config);
    openssl_pkey_export($privateResource, $privateKey);
    // 导出私钥
    openssl_pkey_export_to_file($privateResource, __DIR__ . '/private.key');
} else {
    $privateKey = openssl_pkey_get_private(sprintf("file://%s", __DIR__ . '/private.key'));
}

if (!file_exists(__DIR__ . '/key.pub')) {
    // 导出公钥
    $pubKey = openssl_pkey_get_details($privateKey);
    file_put_contents(__DIR__ . '/key.pub', $pubKey['key']);
}

$pubKey = openssl_pkey_get_public(sprintf("file://%s", __DIR__ . '/key.pub'));

$source = "hello openssl";

echo sprintf("Plaintext string: %s", $source) . PHP_EOL;
// 公钥加密
openssl_public_encrypt($source, $encrypted, $pubKey);

echo sprintf("Encrypt string: %s" . PHP_EOL, $encrypted);
// 私钥解密
openssl_private_decrypt($encrypted, $decrypted, $privateKey);

echo sprintf("Decrypt string: %s" . PHP_EOL, $decrypted);


