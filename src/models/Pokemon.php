<?php

class Pokemon
{
    private int $id;
    private string $name;
    private bool $isCaptured;

    public function __construct(string $_name, bool $_isCaptured, int $_id)
    {
        $this->name = $_name;
        $this->isCaptured = $_isCaptured;
        $this->id = $_id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($_name)
    {
        $this->name = $_name;
    }

    public function getIsCaptured()
    {
        return $this->isCaptured;
    }

    public function setIsCaptured($_isCaptured)
    {
        $this->isCaptured = $_isCaptured;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($_id)
    {
        $this->id= $_id;
    }
}
