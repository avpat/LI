<?php

declare(strict_types=1);

namespace LendInvest;

namespace LendInvest\Model;

namespace LendInvest\Model\Interfaces;

interface InterestInterface
{
    //get rate of interest
    public function getRateOfInterest():float;

}

