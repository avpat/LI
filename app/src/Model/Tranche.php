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
     * @return mixed
     */
    public function getMaxLimit()
    {
        return $this->maxLimit;
    }

    /**
     * @param mixed $maxLimit
     */
    public function setMaxLimit($maxLimit): void
    {
        $this->maxLimit = $maxLimit;
    }

    /**
     * @return mixed
     */
    public function getRateOfInterest()
    {
        return $this->rateOfInterest;
    }

    /**
     * @param mixed $rateOfInterest
     */
    public function setRateOfInterest($rateOfInterest): void
    {
        $this->rateOfInterest = $rateOfInterest;
    }



}
