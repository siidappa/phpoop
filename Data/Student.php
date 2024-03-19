<?php 

class Student {
    public string $id;
    public string $name;
    public string $value;
    private string $sample;

    public function setSample(string $sample) {
        $this->sample = $sample;
    }

    public function __clone()
    {
        unset($this->sample);
    }
}