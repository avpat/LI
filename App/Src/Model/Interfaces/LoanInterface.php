<?php

declare(strict_types=1);

namespace LendInvest;

namespace LendInvest\Model;

namespace LendInvest\Model\Interfaces;

use LendInvest\Model\Interfaces\TrancheInterface;

/**
 * create an interface
 * Interface LoanInterface
 * @package LoanInterface]
 */
interface LoanInterface
{
    //lets only expose required implementation details
    public function getLoan() : array;

    //loan will have state ( open or close)
    public function getLoanState():void;

    //loan will have tranches(can be added/removed? )
    public function addTranche(TrancheInterface $tranche):bool;

    //get tranche for the loan
    public function getTranches(): array;

    //loan will have start and end date
    public function getStartDate(): \DateTime;

    //loan will have end date
    public function getEndDate(): \DateTime;

}


