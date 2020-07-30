<?php

class InvestorController
{
    /**
     * $loan model instance
     */
    private $loanManager;

    /**
     * $investor model instance
     */
    private $investorManager;

    /**
     * $tranche model instance
     */
    private $trancheManager;

    /**
     * IndexController constructor.
     * @param $loanModel
     * @param $investorModel
     * @param $trancheModel
     */
    public function __construct($loanModel, $investorModel, $trancheModel)
    {
        $this->loanManager     = $loanModel;
        $this->investorManager = $investorModel;
        $this->trancheManager  = $trancheModel;
    }



    public function indexAction($request)
    {
        $investors = $this->investorManager->findAllInvestors();
        $View = new InvestorView($this->investorManager);
        $View->indexView($investors);
    }

}
