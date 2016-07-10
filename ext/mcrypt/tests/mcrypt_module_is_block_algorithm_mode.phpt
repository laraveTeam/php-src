--TEST--
mcrypt_module_is_block_algorithm_mode
--SKIPIF--
<?php if (!extension_loaded("mcrypt")) print "skip"; ?>
--FILE--
<?php
var_dump(mcrypt_module_is_block_algorithm_mode(MCRYPT_MODE_CBC));
var_dump(mcrypt_module_is_block_algorithm_mode(MCRYPT_MODE_ECB));
var_dump(mcrypt_module_is_block_algorithm_mode(MCRYPT_MODE_STREAM));
var_dump(mcrypt_module_is_block_algorithm_mode(MCRYPT_MODE_OFB));
--EXPECTF--
Deprecated: mcrypt_module_is_block_algorithm_mode(): The mcrypt extension is deprecated and will be removed in the future: use openssl instead in %s%emcrypt_module_is_block_algorithm_mode.php on line 2
bool(true)

Deprecated: mcrypt_module_is_block_algorithm_mode(): The mcrypt extension is deprecated and will be removed in the future: use openssl instead in %s%emcrypt_module_is_block_algorithm_mode.php on line 3
bool(true)

Deprecated: mcrypt_module_is_block_algorithm_mode(): The mcrypt extension is deprecated and will be removed in the future: use openssl instead in %s%emcrypt_module_is_block_algorithm_mode.php on line 4
bool(false)

Deprecated: mcrypt_module_is_block_algorithm_mode(): The mcrypt extension is deprecated and will be removed in the future: use openssl instead in %s%emcrypt_module_is_block_algorithm_mode.php on line 5
bool(true)