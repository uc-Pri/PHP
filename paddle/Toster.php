<?php

class Toster
{
    public array $slices = [];
    public int $size = 2;

    public function addSlice(string $slice): void
    {
        if (count($this->slices) < $this->size) {
            $this->slices[] = $slice;
        }
    }

    public function tost()
    {
        echo "Prince";
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . "Tosting" . $slice;
        }
    }

}

?>