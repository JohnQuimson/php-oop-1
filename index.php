<?php

class Movie
{
  public $titolo;
  public $anno;
  public $genere;
  public $recente;

  public function __construct($_titolo, $_anno, $_genere)
  {
    $this->titolo = $_titolo;
    $this->anno = $_anno;
    $this->genere = $_genere;

    // Richiamo la funzione
    $this->isRecent();
  }

  // Funzione che verifica se è recente
  public function isRecent()
  {
    if ($this->anno >= 2015) {
      $this->recente = 'Sì';
    } else {
      $this->recente = 'No';
    }
  }
}

// Stampa degli obj
$film1 = new Movie('Titanic', 1997, 'Romantico/Avventura');
var_dump($film1);

$film2 = new Movie('Oppenheimer', 2023, 'Thriller');
var_dump($film2);
