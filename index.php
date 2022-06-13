<?php 

class Movie
{
    public $name;
    public $year;
    public $countries;
    public $vote;

    function __construct($_name, $_year, $_vote)
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->vote = $_vote;
    }

    public function insertCountry($_countries) {
        $this->country[] = $_countries;
    }

    public function getCountryString() {
        return join(", ", $this->country); 
    }
}
$spiderman = new Movie("The Amazing Spider-man", 2012, "4.3/5");
$spiderman->insertCountry("USA");

$quasi_amici = new Movie("Quasi Amici", 2015, "4,8/5");
$quasi_amici->insertCountry("Francia");

$invisible_guy = new Movie("Il Ragazzo Invisibile", 2016, "3,2/5");
$invisible_guy->insertCountry("Italia");

$movies = [];
$movies[] = $spiderman;
$movies[] = $quasi_amici;
$movies[] = $invisible_guy;
?>

<ul>
    <?php foreach ($movies as $movie) { ?>
    <li>
        <h2>
            <?php echo $movie->name; ?>
        </h2>
        <h4>
            Anno di uscita: <?php echo $movie->year; ?>
        </h4>
        <p>
            Paese: <?php echo $movie->getCountryString(); ?>
        </p>
        <p>
            <?php echo $movie->vote; ?>
        </p>
    </li>
    <?php } ?>
</ul>