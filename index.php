<?php

class Movie
{
  public $title;
  public $genres = [];
  public $releaseYear;

  public function __construct($title, $genres, $releaseYear)
  {
    $this->title = $title;
    $this->genres = $genres;
    $this->releaseYear = $releaseYear;
  }

  public function displayMovieInfo()
  {
    echo "Title: " . $this->title . "<br>";
    echo "Genres: " . implode(', ', $this->genres) . "<br>";
    echo "Release Year: " . $this->releaseYear . "<br>";
    echo "<br>"; 
  }
}

$genresMovie1 = ["Drama", "Crime"];
$genresMovie2 = ["Action", "Adventure"];

$movie1 = new Movie("The Shawshank Redemption", $genresMovie1, 1994);
$movie2 = new Movie("Inception", $genresMovie2, 2010);

echo "<h2>Movie 1:</h2>";
$movie1->displayMovieInfo();

echo "<h2>Movie 2:</h2>";
$movie2->displayMovieInfo();
