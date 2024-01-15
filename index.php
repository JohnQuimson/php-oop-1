<?php

class Movie
{
  public $titolo;
  public $anno;
  public $genere;

  public function __construct($_titolo, $_anno, $_genere)
  {
    $this->titolo = $_titolo;
    $this->anno = $_anno;
    $this->genere = $_genere;
  }
}
