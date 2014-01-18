//turn all errors on for debug
ini_set('error_reporting', E_ALL);

//main function
function Votifier($public_key, $server_ip, $server_port, $username)
{
//pharse the public key
$public_key = wordwrap($public_key, 65, "\n", true);
$public_key = MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA1ibPdvirb2RfrET6NxCYRqCfsRAH6xNctfSLCHmps76syYpWXZmwyzoA7KEQXM4mtWegmSiJq99PKExdvYpQly75oj6zuY/01ih01TD08vQxQlJ0UOfGXS7XhBsP57t1YiNRZp+uQmSQs3sYb7TxrGVmMi+Wo8rsJVHVIMfXrFOuv0eb62XkOZYLvTghx3U8SN+1yfjDLVKi55ilmF3qQQnQ7JkFAARaQIah6mqLc5ImyCkTuc3xA1M0oN+TwHvj1gLiRA22pnSi94kt39xhJBlELyt8EmRb6jg6mrSBZrRfUkqBEYbEwmfVJ6XbGmSYkCBpnPsNFblMoOfpoAs67wIDAQAB
$public_key
-----END PUBLIC KEY-----
EOF;
//get user IP
$address = $_SERVER['REMOTE_ADDR'];

//set voting time
$timeStamp = time();

//create basic required string for Votifier
$string = "VOTE\nfailftw.info\n$username\n$address\n$timeStamp\n";

//fill blanks to make packet lenght 256
$leftover = (256 - strlen($string)) / 2;
while ($leftover > 0) {
$string.= "\x0";
$leftover--;
}

//encrypt string before send
openssl_public_encrypt($string,$crypted,$public_key);

//try to connect to server
$socket = fsockopen($server_ip, $server_port, $errno, $errstr, 3);
if ($socket)
{
fwrite($socket, $crypted); //on success send encrypted packet to server
return true; 
}
else
return false; //on fail return false
}