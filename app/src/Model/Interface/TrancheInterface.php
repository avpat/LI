<?php

namespace TrancheInterface;

interface TrancheInterface
{
    //tranche will have max limit
    public function getMaxLimit() : float;

    //tranche will have interest rate
    public function getRateOfInterest : float;

}
