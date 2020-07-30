<?php

class IndexController
{
    /**
     * $loan model instance
     */
    private $loan;

    /**
     * $investor model instance
     */
    private $investor;

    /**
     * $tranche model instance
     */
    private $tranche;

    /**
     * IndexController constructor.
     * @param $loanModel
     * @param $investorModel
     * @param $trancheModel
     */
    public function __construct($loanModel, $investorModel, $trancheModel)
    {
        $this->loan     = $loanModel;
        $this->investor = $investorModel;
        $this->tranche  = $trancheModel;
    }



    public function indexAction($request)
    {
        $View = new LoanView($this->loan);
        $View->indexView();
    }

}
