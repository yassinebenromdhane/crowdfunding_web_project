<?php
include('../utils/validate_email.php');
$email = "yassine.beno@outlook.fr";
var_dump(validateEmail($email));
if (validateEmail($email)) {
    echo "Valid email";
   
} else {
    echo "Invalid email";
}

?>