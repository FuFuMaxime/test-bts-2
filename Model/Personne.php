<?php

require_once 'ClientInterface.php';
require_once 'IdentifiantTrait.php';

final class Personne implements ClientInterface
{

    private $nom;

    private $prenom;
    
    private $adresse;
    
    use IdentifiantTrait;


    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
    public function getAdresse(): string
    {
        return $this.adresse;
    }
    public function setAdresse(string $adresse): self
        {
        $this->adresse = $adresse;

        return $this;
    }

}
