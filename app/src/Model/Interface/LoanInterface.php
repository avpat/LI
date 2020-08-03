<?php

namespace LoanInterface;
/**
 * create an interface 
 * Interface LoanInterface
 * @package LoanInterface]
 */
interface LoanInterface
{


    //loan will have start and end date

    public function createLoan():bool;

    //loan will have state ( open or close)
    public function loanState():bool;

    //loan will have tranches(can be added/removed? )
    public function addTranche();

    //loan tranche can be removed(?): TO CHECK
    public function deleteTranche();

}
