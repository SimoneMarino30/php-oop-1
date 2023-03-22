<?php 
class Movie {
    public $title;
    public $year;
    public $genre;

    // constructor
    function __construct( $_title, $_year, $_genre) {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
    }

    // method
    public function getTitle() {
    return $this->title;
  }
  public function getYear() {
    return $this->year;
  }
  public function getGenre() {
    return $this->genre;
  }

   

}

 //   objects
    $film_1 = new Movie ("Ritorno al futuro", "1985", "Comedy");
    $film_2 = new Movie ("Avatar", "2009", "Science fiction");

    echo $film_1->getTitle(); 
    echo "\n";
    echo $film_1->getYear();
    echo "\n";
    echo $film_1->getGenre();
    echo "<br>";
    echo $film_2->getTitle();
    echo "\n";
    echo $film_2->getYear();
    echo "\n";    
    echo $film_2->getGenre();
?>