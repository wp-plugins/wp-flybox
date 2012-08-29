<?php
/**
This Example shows how to Subscribe a New Member to a List using the MCAPI.php 
class and do some basic error checking.
**/
require_once 'static/MCAPI.class.php';
    //API Key - see http://admin.mailchimp.com/account/api
    $apikey = '7b3e3d70aeac43413744ca36d3629c9c-us5';
    
    // A List Id to run examples against. use lists() to view all
    // Also, login to MC account, go to List, then List Tools, and look for the List ID entry
    $listId = 'e6e5c9df0e';
    
    // A Campaign Id to run examples against. use campaigns() to view all
    $campaignId = '0';

    //some email addresses used in the examples:
    $my_email = 'cconoly@cconoly.com';
    $boss_man_email = 'INVALID@example.com';

    //just used in xml-rpc examples
    $apiUrl = 'http://api.mailchimp.com/1.3/';

$api = new MCAPI($apikey);

$merge_vars = array('FNAME'=>'FirstName', 'LNAME'=>'Last');/*, 
                  'GROUPINGS'=>array(
                        array('name'=>'Your Interests:', 'groups'=>'Bananas,Apples'),
                        array('id'=>22, 'groups'=>'Trains'),
                        )
                    );
                    */
// By default this sends a confirmation email - you will not see new members
// until the link contained in it is clicked!
$retval = $api->listSubscribe( $listId, $my_email, $merge_vars );

if ($api->errorCode){
	echo "Unable to load listSubscribe()!\n";
	echo "\tCode=".$api->errorCode."\n";
	echo "\tMsg=".$api->errorMessage."\n";
} else {
    echo "Subscribed - look for the confirmation email!\n";
}

?>
