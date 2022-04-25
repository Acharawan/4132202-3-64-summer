<?php
set_include_path(get_include_path() . PATH_SEPARATOR . '../phpseclib');

include 'Net/SSH2.php';

$cmd = $_GET['cmd'];

$ssh = new Net_SSH2('172.23.16.1', 2222);
if (!$ssh->login('root', 'root')) {
    exit('Login Failed');
}

echo $ssh->exec($cmd);

