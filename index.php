<?php 

class Movie
{
    public $name;
    public $country;
    public $vote;

    function __construct($_name, $_country, $_vote)
    {
        $this->name = $_name;
        $this->country = $_country;
        $this->vote = $_vote;
    }
}

?>