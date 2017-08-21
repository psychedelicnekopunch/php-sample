<?php
echo "sha1()\n";
echo sha1('sha1');
echo "\n\n";
echo "password_hash()\n";
echo password_hash('password_hash', PASSWORD_DEFAULT);
echo "\n\n";
echo "password_verify()\n";
var_dump(password_verify('password_hash', password_hash('password_hash', PASSWORD_DEFAULT)));
?>