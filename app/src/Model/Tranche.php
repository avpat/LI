<?php

declare(strict_types=1);

namespace LendInvest;

namespace LendInvest\Model;

use LendInvest\Model\Interfaces\TrancheInterface;

class Tranche implements TrancheInterface
{
    //each tranche has a different ROI
    private $rateOfInterest;

    //each tranche has max limit value
    private $maxLimit;


    public function __construct(float $rateOfInterest, float $maxLimit)
    {
        $this->setRateOfInterest($rateOfInterest);
        $this->setMaxLimit($maxLimit);
    }

    /**
     * @return float
     */
    public function getMaxLimit() : float
    {
        return $this->maxLimit;
    }

    /**
     * @param $maxLimit
     * @return float
     */
    public function setMaxLimit($maxLimit): float
    {
        $this->maxLimit = $maxLimit;
    }

    /**
     * @return float
     */
    public function getRateOfInterest() :float
    {
        return $this->rateOfInterest;
    }

    /**
     * @param $rateOfInterest
     * @return float
     */
    public function setRateOfInterest($rateOfInterest): float
    {
        $this->rateOfInterest = $rateOfInterest;
    }



}
