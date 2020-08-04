<?php

declare(strict_types=1);

namespace LendInvest;

namespace LendInvest\Model;

namespace LendInvest\Model\Interfaces;


interface InvestmentInterface
{
    //how much is available to invest
    public function getWalletAmount() : WalletInterface;

    //get loan details
    public function getLoan() : LoanInterface;

    //get tranche
    public function getTranche() : TrancheInterface;

    //get interest rate
    public function getRateOfInterest() : InterestInterface;

    //get loan date
    public function getLoanStartDate() : LoanInterface;

}
