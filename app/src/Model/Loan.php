<?php
declare(strict_types=1);

class Loan
{
    //each loan has start date and end date
    private $loanStartDate;
    private $loanEndDate;

    public function __construct($loanStartDate, $loanEndDate)
    {
        $this->setLoanStartDate($loanStartDate);
        $this->setLoanEndDate($loanEndDate);
    }

    private function setLoanStartDate($loanStartDate)
    {
        $this->loanStartDate = $loanStartDate;
    }

    private function setLoanEndDate($loanEndDate)
    {
        $this->loanEndDate = $loanEndDate;
    }
}
