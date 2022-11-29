<?php
declare(strict_types=1);

class Transaction2
{
    public int $count = 0;
    public function __construct(
        public float $amount,
        public string $desc
    )
    {
    }
    public function process()
    {
        echo "processing ";
    }
}
?>