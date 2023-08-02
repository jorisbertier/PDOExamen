<?php

namespace App\Repository;

use PDO;
use App\Models\Actor;
use App\Service\PDOService;

class ActorRepository
{
    private PDOService $pdoService;

    private string $queryAll = 'SELECT * FROM actor ';

    public function __construct()
    {
        $this->pdoService = new PDOService();
    }

    //array d'Actor si en objet
    public function findAll():array
    {
        $actors = $this->pdoService->getPDO()->query($this->queryAll)->fetchAll(PDO::FETCH_CLASS, Actor::class);

        foreach ($actors as $actor) {
            
            $actor->setFirstName($actor->first_name);
            $actor->setLastName($actor->last_name);
        }

        return $actors;
    }

    //Actor si en objet
    public function insertActor(array $actor)
    {
        $query = $this->pdoService->getPdo()->prepare('INSERT INTO actor(first_name, last_name) VALUES(:firstName, :lastName) ');
        $query->bindParam(':firstName', $actor['firstName']);
        $query->bindParam(':lastName', $actor['lastName']);
        $query->execute();
    }
}