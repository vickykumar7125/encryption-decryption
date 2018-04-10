# Encrypt Decrypt Data

*By [Vicky Kumar](https://www.facebook.com/kumar.vicky7125)*

This library helps you to encrypt and decrypt the sensitive data of ur website like session, password etc.

## Installation

require_once 'encrypt_decrypt.php';

## Usages

```
<?php
require_once 'encrypt_decrypt.php';

$string = 'Vicky kumar';
$var = new encrypt_decrypt();
$enc = $var -> encrypt($string);
$dec = $var -> decrypt($enc);
echo 'Real String: '.$string.'<br>';
echo 'Encrypted String: '.$enc.'<br>';
echo 'Decrypted String: '.$dec.'<br>';

```

## Result

```

Real String: Vicky kumar
Encrypted String: a0FtNGlpaGNyVE91c0hIcWRsc01sdz09
Decrypted String: Vicky kumar

```

## License

This bundle is under the MIT license. For the full copyright and license
information please view the LICENSE file that was distributed with this source code.
