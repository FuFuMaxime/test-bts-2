<?php

require_once 'ClientInterface.php';
require_once 'IdentifiantTrait.php';

final class Entreprise implements ClientInterface
{

    private $nom;
    
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

}
