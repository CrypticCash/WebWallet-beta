<?php

$server_url = "/";  // ENTER WEBSITE URL ALONG WITH A TRAILING SLASH

$db_host = "localhost";
$db_user = "dbuser";
$db_pass = "password";
$db_name = "dbname";

$rpc_host = "127.0.0.1";
$rpc_port = "2300";
$rpc_user = "crypticrpc";
$rpc_pass = "yourstrongpassword";

$fullname = "Cryptic Cash"; //Website Title (Do Not include 'wallet')
$short = "CRYP"; //Coin Short (BTC)
$blockchain_tx_url = "http://explorer.crypticcash.org/tx/"; //Blockchain Url
$support = "dev@crypticcash.org"; //Your support eMail
$hide_ids = array(1); //Hide account from admin dashboard
$donation_address = "EhmnC2PGz9cpXZac1Zm1XCPSRfVjtx3UbS"; //Donation Address

$reserve = "0"; //This fee acts as a reserve. The users balance will display as the balance in the daemon minus the reserve. We don't reccomend setting this more than the Fee the daemon charges.

?>
