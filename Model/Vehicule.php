<?php

abstract class Vehicule {

    protected $immatriculation;

    protected $marque;

    protected $modele;

    protected $anneeConception;

    protected $puissance;

    protected $poids;

    protected $consommation;

    public function __construct(Marque $marque, string $modele, int $anneeConception)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->anneeConception = $anneeConception;
    }

    public function setImmatriculation(string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getImmatriculation(): string
    {
        return $this->immatriculation;
    }

    public function getMarque(): Marque
    {
        return $this->marque;
    }

    public function setMarque(Marque $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getAnneeConception(): int
    {
        return $this->anneeConception;
    }

    public function setAnneeConception(int $anneeConception): self
    {
        $this->anneeConception = $anneeConception;

        return $this;
    }

    public function getPuissance(): float
    {
        return $this->puissance;
    }

    public function setPuissance(float $puissance): self
    {
        $this->puissance = $puissance;

        return $this;
    }

    public function getPoids(): float
    {
        return $this->poids;
    }

    public function setPoids(int $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getConsommation(): float
    {
        return $this->consommation;
    }

    public function setConsommation(float $consommation): self
    {
        $this->consommation = $consommation;

        return $this;
    }
}
