<?php

require_once 'ClientInterface.php';

class Personne implements ClientInterface
{
    private $identifiant;

    private $nom;

    private $prenom;
    
    private $adresse;

    public function getIdentifiant(): string
    {
        return $this->identifiant;
    }

    public function setIdentifiant(string $identifiant): self
    {
        $this->identifiant = $identifiant;

        return $this;
    }

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
