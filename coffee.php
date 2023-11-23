<?php

class Coffee {
    private $isFull = false;

    public function refill() {
        $this->isFull = true;
        echo "Coffee has been refilled.\n";

    public function drink() {
        if ($this->isFull) {
            $this->isFull = false;
            echo "TopDev gurus have drunk their coffee. Time to code!\n";
        } else {
            echo "The reservoir is empty. Time to refill!\n";
        }
    }
}
}

$coffee = new Coffee();

if (empty($coffee)) {
    $coffee->refill();
} else {
    $coffee->drink();
}

?>
