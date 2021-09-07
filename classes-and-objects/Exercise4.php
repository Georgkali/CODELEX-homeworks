<?php

class Movie {
    private string $title;
    private string $studio;
    private string $rating;
    public function __construct(string $title, string $studio, string $rating) {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }
    public function getRating(): string
    {
        return $this->rating;
    }
    public static function getPG(array $mov): array
    {
        foreach ($mov as $movie) {
            if($movie->rating !== "PG")
                unset($mov[array_search($movie, $mov)]);
        }
        return $mov;
    }

}

$movies = [
    new Movie("Casino Royale", "Eon Productions", "PG13"),
    new Movie("Glass", "Buena Vista International", "PG13"),
    new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG")
];

var_dump(Movie::getPG($movies));

