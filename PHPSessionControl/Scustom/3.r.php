<?php

include "1.customsession.php";

$custom=new CustomSession();
// ini_set("session.save_handler","user");
session_set_save_handler($custom,true);

session_start();
print_r($_SESSION);




