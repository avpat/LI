<?php

require_once("Model/Tranche.php");
require_once("Request.php");

$request = new Request();

$loanInvest = new Tranche($request);

//using get
echo $loanInvest->getMax();

//using set
$loanInvest->setMax(20000);


echo $loanInvest->getMax();

echo "\n";



