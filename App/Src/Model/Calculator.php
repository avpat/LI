<?php

declare(strict_types=1);

namespace LendInvest;

namespace LendInvest\Model;

use LendInvest\Model\Interfaces\CalculatorInterface;

class Calculator implements CalculatorInterface
{

    private $accumulatedInterest;

    public function __construct()
    {
        $this->accumulatedInterest = $this->getAccumulatedInterest();
    }

    /**
     * @return void
     */
    public function getAccumulatedInterest(): float
    {

        return $this->accumulatedInterest;
    }

    /**
     * @param float $accumulatedInterest
     */
    public function setAccumulatedInterest(float $accumulatedInterest): void
    {
        $this->accumulatedInterest = $accumulatedInterest;
    }


}
