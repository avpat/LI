<?php

declare(strict_types=1);

namespace LendInvest;

namespace LendInvest\Model;

namespace LendInvest\Model\Interfaces;

namespace InvestorInterface;

use LendInvest\Model\Interfaces\TrancheInterface;

interface InvestorInterface
{
    //lets only expose required implementation details
    //loan will have state ( open or close)
    public function getLoanState():void;

    //loan will have tranches(can be added/removed? )
    public function getTranche(TrancheInterface $tranche):bool;

    //get tranche for the loan
    public function getTranches(): array;

    //loan will have start and end date
    public function getStartDate(): \DateTime;

    //loan will have end date
    public function getEndDate(): \DateTime;

}

