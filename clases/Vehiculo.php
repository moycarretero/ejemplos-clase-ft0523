<?php

abstract class Vehiculo
{
    protected string $matricula;

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    /**
     * @param string $matricula
     */
    public function setMatricula(string $matricula): void
    {
        echo $this->getMatricula();

        $this->matricula = $matricula;
    }
}
