<?php
namespace Listener;
require('PaypalIPN.php');
use PaypalIPN;

$ipn = new PaypalIPN();

// Use the sandbox endpoint during testing.
//$ipn->useSandbox();

$verified = $ipn->verifyIPN();
if ($verified) {
    /*
     * Process IPN
     * A list of variables is available here:
     * https://developer.paypal.com/webapps/developer/docs/classic/ipn/integration-guide/IPNandPDTVariables/
     */

     $colours_string = $_POST['option_selection1'];
     $colours_array = explode(", ", $colours_string);

     // // NOTE: SIDDHANT WRITE YOUR CODE HERE; you can get all the variables that were sent using $_POST
}

// Reply with an empty 200 response to indicate to paypal the IPN was received correctly.
header("HTTP/1.1 200 OK");
