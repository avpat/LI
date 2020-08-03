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
     * @return \DateTime
     */
    private function setLoanStartDate($loanStartDate): \DateTime
    {
        $this->loanStartDate = $loanStartDate;
    }

    /**
     * @param $loanEndDate
     * @return \DateTime
     */
    private function setLoanEndDate($loanEndDate): \DateTime
    {
        $this->loanEndDate = $loanEndDate;
    }

    /**
     * @param $tranches
     * @return array
     */
    private function setTranches($tranches) : array
    {
        if(is_array($tranches))
        {
            foreach ($tranches as $tranche) {
                array_push($this->tranches, $tranche);
            }
        }

    }
}
