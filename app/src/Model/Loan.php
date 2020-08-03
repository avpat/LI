<?php
declare(strict_types=1);

namespace LendInvest;

namespace LendInvest\Model;

use LendInvest\Model\Interfaces\LoanInterface;

class Loan implements LoanInterface
{
    //each loan has start date and end date
    private $loanStartDate;
    private $loanEndDate;
    //Each loan is split in multiple tranches.
    private $tranches = [];


    public function __construct($loanStartDate, $loanEndDate, $tranches)
    {
        $this->setLoanStartDate($loanStartDate);
        $this->setLoanEndDate($loanEndDate);
        $this->setTranches($tranches);
    }

    /**
     * @param $loanStartDate
     */
    private function setLoanStartDate($loanStartDate)
    {
        $this->loanStartDate = $loanStartDate;
    }

    /**
     * @param $loanEndDate
     */
    private function setLoanEndDate($loanEndDate)
    {
        $this->loanEndDate = $loanEndDate;
    }

    /**
     * @param $tranches
     */
    private function setTranches($tranches)
    {
        if(is_array($tranches))
        {
            foreach ($tranches as $tranch) {
                array_push($tranches, $tranch);
            }
        }

    }
}
