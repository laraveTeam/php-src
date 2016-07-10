--TEST--
mcrypt_module_get_supported_key_sizes
--SKIPIF--
<?php if (!extension_loaded("mcrypt")) print "skip"; ?>
--FILE--
<?php
var_dump(mcrypt_module_get_supported_key_sizes(MCRYPT_RIJNDAEL_256));
var_dump(mcrypt_module_get_supported_key_sizes(MCRYPT_RC2));
--EXPECTF--
Deprecated: mcrypt_module_get_supported_key_sizes(): The mcrypt extension is deprecated and will be removed in the future: use openssl instead in %s%emcrypt_module_get_supported_key_sizes.php on line 2
array(3) {
  [0]=>
  int(16)
  [1]=>
  int(24)
  [2]=>
  int(32)
}

Deprecated: mcrypt_module_get_supported_key_sizes(): The mcrypt extension is deprecated and will be removed in the future: use openssl instead in %s%emcrypt_module_get_supported_key_sizes.php on line 3
array(0) {
}