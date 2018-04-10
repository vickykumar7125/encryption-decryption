# encryption-decryption
a simple encryption and decryption class to encrypt your sensitive data like session variables, userid, password's etc.

# Uses

<?php
$string = 'Vicky kumar';
$var = new encrypt_decrypt();
$enc = $var -> encrypt($string);
$dec = $var -> decrypt($enc);
echo 'Real String: '.$string.'<br>';
echo 'Encrypted String: '.$enc.'<br>';
echo 'Decrypted String: '.$dec.'<br>';

#Result
Real String: Vicky kumar
Encrypted String: a0FtNGlpaGNyVE91c0hIcWRsc01sdz09
Decrypted String: Vicky kumar
