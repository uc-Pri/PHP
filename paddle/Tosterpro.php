<?php
// inheritance 
class Tosterpro extends Toster
{
    public int $size = 4;
    public function toast()
    {

        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . "Tosting" . $slice;
        }
    }
}

?>