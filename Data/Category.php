<?php

class Category {
    private string $name;
    private bool $expansive;

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void
    {
        if(trim($name) != "" ):
            $this->name = $name;
        endif;
    }

    public function isExpansive(): bool
    {
        return $this->expansive;
    }

    public function setExpansive(bool $expansive): void
    {
        $this->expansive = $expansive;
    }
}