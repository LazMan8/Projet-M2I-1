<?php
// Entité qui représente le genre de livre

Class Genre {
    private string $genre;


// Constructeur

public function __construct(string $genre){
    $this-> genre = $genre;

}

// Getter

public function getGenre(){
    return $this->genre;
}

// Setter

public function setGenre($genre){
    $this->genre=$genre;
}
}