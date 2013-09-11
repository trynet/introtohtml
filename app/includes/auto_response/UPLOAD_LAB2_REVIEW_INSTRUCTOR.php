<?php
$subject = "$firstname Lab2";
$message = <<<EOT

$firstname has moved on to payment and here is the data:

Last Name: $lastname
Promo Code: $promo
How did you find this class?: $found

Student is waiting for review of following links:

URLs: $urls

<a href="$proceed_url">Allow $firstname to proceed</a>
**SEND THIS LINK TO STUDENT FOR PAYMENT**: http://dev.introtohtml.net/register_paypal.php?user_id=$user_id&u=$usertype

EOT;
