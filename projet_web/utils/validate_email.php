<?php

require_once '../vendor/autoload.php';
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;
function validateEmail($email)
{

    $validator = new EmailValidator();
    if ($validator->isValid($email, new RFCValidation()) && checkdnsrr(array_pop(explode("@",$email)),"MX")) {
      
        return true;
    } else {
        return false;
    }
}

?>