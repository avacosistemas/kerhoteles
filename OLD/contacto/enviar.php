<?php

/* ==========================  Define variables ========================== */

#Your e-mail address
define("__TO__", "reservasrecoleta@kerhoteles.com.ar");

#Message subject
define("__SUBJECT__", "Contacto desde Ker Hoteles");

if(empty($_POST['hotel-field'])){
    die(json_encode(array('mailSent' => false, 'message' => __MESSAGE_EMPTY_FILDS__)));
}
$hotelField= $_POST['hotel-field'];


/* ========================  End Define variables ======================== */
require '../envioCore.php';

?>
