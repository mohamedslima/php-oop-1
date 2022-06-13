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
$spiderman = new Movie("The Amazing Spider-man", "USA", "4.3/5");
$quasi_amici = new Movie("Quasi Amici", "Francia", "4,8/5");
$invisible_guy = new Movie("Il Ragazzo Invisibile", "Italia", "3,2/5")
?>