<?php

declare(strict_types=1);

namespace LendInvest;

namespace LendInvest\Model;

namespace LendInvest\Model\Interfaces;


interface CalculatorInterface
{
    //get accumulated interest
    public function getAccumulatedInterest():float;

}

