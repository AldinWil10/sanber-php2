<?php
require('animal.php');

class ape extends animal
{
    public $legs = 2;
    public function yell()
    {
        echo "Hobi Teriak Auooooo";
    }
}

class frog extends animal
{
    public function jump()
    {
        echo "Hobinya hop hop";
    }
}
