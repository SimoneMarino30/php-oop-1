<?php 

require_once __DIR__ . "./data/db.php";

// class Genre {
//     public $type;
    
//     // constructor
//     function __construct (
//         $_type,
//     )
//     {
//         $this->type = $_type;
//     }
//  }
class Movie {
    public $title;
    public $year;
    public $genre;

    // constructor
    function __construct( 
        string $_title, 
        int $_year, 
        string $_genre
        // Genre $genre
        
    ) 
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        
    }

    // methods
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
    // var_dump($array_movies);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>

<body>
    <?php foreach($array_movies as $movie) : ?>
    <?php include __DIR__ . "/template/movieList.php" ?>
    <?php endforeach; ?>
</body>

</html>