<?php

namespace App\Repository;

use PDO;
use App\Models\Movie;
use App\Service\PDOService;

class MovieRepository
{
    private PDOService $pdoService;

    private string $queryAll = 'SELECT * FROM movie ';

    public function __construct()
    {
        $this->pdoService = new PDOService();
    }

    //array de Movie si en objet
    public function findAll():array
    {
        return $this->pdoService->getPDO()->query($this->queryAll)->fetchAll(PDO::FETCH_CLASS, Movie::class);
    }

    //array de Movie si en objet
    public function findByTitle(array $array) 
    {
        $title = '%' . $array['title'] . '%';
        $query = $this->pdoService->getPdo()->prepare('SELECT * FROM movie WHERE title LIKE :search');
        $query->bindParam(':search', $title);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
    //Movie si en objet
    public function insertMovie(array $movie)
    {
        $query = $this->pdoService->getPdo()->prepare('INSERT INTO movie(title, release_date) VALUES(:title, :date) ');
        $query->bindParam(':title', $movie['title']);
        $query->bindParam(':date', $movie['date']);
        $query->execute();
    }
}