<?php
declare(strict_types=1);
class Transaction
{
    private float $amount;
    public function __construct(float $amount)
    {
        // echo "transaction first";
        $this->amount = $amount;
    }
}
?>