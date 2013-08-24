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

EOT;
