<?php


declare(strict_types=1);

namespace LendInvest;

namespace LendInvest\Model;

namespace LendInvest\Model\Interfaces;

interface TrancheInterface
{
    //tranche will have max limit
    public function getMaxLimit() : float;

    //tranche will have interest rate
    public function getRateOfInterest() : float;

}
