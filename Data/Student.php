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

    public function __toString(): string
    {
        return "Student: {$this->name}, Id: {$this->id}, Value: {$this->value}" . PHP_EOL;
    }

    public function __invoke(...$argument): void
    {
        $join = join(":", $argument);
        echo "Invoke as Joined with Argument {$join}". PHP_EOL;
    }

    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample
        ];
    }
}