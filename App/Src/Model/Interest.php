<?php

namespace LendInvest;


class Interest
{
    private $rateOfInterest;

    public function __construct()
    {
        $this->rateOfInterest = $this->getRateOfInterest();
    }

    /**
     * @param mixed $rateOfInterest
     */
    public function setRateOfInterest($rateOfInterest): void
    {
        $this->rateOfInterest = $rateOfInterest;
    }

    /**
     * @return float
     */
    public function getRateOfInterest() : float
    {
        return $this->rateOfInterest;
    }


}
