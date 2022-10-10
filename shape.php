<?php

class Shape
{
    public int $numeroLados;
    public string $nombre;

    public function setNumeroLados(int $numeroLados): void
    {
        $this->numeroLados = $numeroLados;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getNumeroLados(): int
    {
        return $this->numeroLados;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }
}

$triangle = new Shape();
$triangle->setNombre("triangle");
$triangle->setNumeroLados(3);
var_dump($triangle->getNombre());
var_dump($triangle->getNumeroLados());

$rectangle = new Shape();
$rectangle->setNombre("rectangle");
$rectangle->setNumeroLados(4);
var_dump($rectangle->getNombre());
var_dump($rectangle->getNumeroLados());
?>
