<?php

namespace App\Repository;

use App\Models\Movie;
use App\Service\PDOService;
use PDO;

class MovieRepository
{
    private PDOService $pdoService;

    public function __construct()
    {
        $this->pdoService = new PDOService();
    }

    //array de Movie si en objet
    public function findAll()
    {
        $query = $this->pdoService->getPdo()->query('SELECT * FROM movie');
        return $query->fetchAll(\PDO::FETCH_ASSOC);
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