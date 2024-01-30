<?php

class Movie
{
  public $title;
  public $genre;
  public $releaseYear;

  public function __construct($title, $genre, $releaseYear)
  {
    $this->title = $title;
    $this->genre = $genre;
    $this->releaseYear = $releaseYear;
  }

  public function displayMovieInfo()
  {
    echo "Title: " . $this->title . "<br>";
    echo "Genre: " . $this->genre . "<br>";
    echo "Release Year: " . $this->releaseYear . "<br>";
    echo "<br>";
  }
}

$movie1 = new Movie("The Shawshank Redemption", "Drama", 1994);
$movie2 = new Movie("The Godfather", "Crime", 1972);

echo "<h2>Movie 1:</h2>";
$movie1->displayMovieInfo();

echo "<h2>Movie 2:</h2>";
$movie2->displayMovieInfo();
