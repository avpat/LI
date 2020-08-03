<?php

declare(strict_types=1);

namespace LendInvest;

namespace LendInvest\Model;

namespace LendInvest\Model\Interfaces;

namespace WalletInterface;


interface WalletInterface
{
    //Virtual wallet holds the amount

    public function getWalletAmount():float;

    //add interest to the wallet at end of every month
    public function addToWallet():float;


}
