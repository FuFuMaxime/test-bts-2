<?php

include 'Vehicule.php';

final class Voiture extends Vehicule
{
    private $nombreDePortes;

    public function getNombreDePortes(): int
    {
        return $this->nombreDePortes;
    }

    public function setNombreDePortes(int $nombre): self
    {
        $this->nombreDePortes = $nombre;

        return $this;
    }

    public function getFicheDetaillee(): string
    {
        return $this->modele. ' de marque '.$this->marque->getNom(). ' ('.$this->puissance.'cv)';
    }
}
