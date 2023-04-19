<?php

require_once 'vendor/autoload.php';
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;
function validateEmail($email)
{

    $validator = new EmailValidator();
    if ($validator->isValid($email, new RFCValidation()) && checkdnsrr(array_pop(explode("@",$email)),"MX")) {
        echo "Email address exists on the internet.";
    } else {
        echo "Email address does not exist on the internet or is invalid.";
    }
}

?>