<?php
$pass = 'abc';
$hashtypes = hash_algos();
foreach($hashtypes as $hashtype) {
echo $hashtype.' : '.hash("$hashtype" , $pass).'<br>';
}
echo 'Bcrypt : '.password_hash($pass,PASSWORD_DEFAULT).'<br>';
echo 'Bcrypt Blowfish : '.password_hash($pass,PASSWORD_BCRYPT).'<br>';
echo 'Argon2I : '.password_hash($pass,PASSWORD_ARGON2I).'<br>';
echo 'Argon2ID : '.password_hash($pass,PASSWORD_ARGON2ID);
?>
