<?php

include('../header.inc.php');

$tpln = new Tpln_Engine();

$tpln->open('template.html');
$tpln->parse('first_name', "John");
$tpln->parse('last_name', "Doe");


echo $tpln->render();


