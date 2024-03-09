<?php
    class Programmer {
        public string $name;
        public function __construct(string $name)
        {
            $this->name = $name;
        }
    }
    
    class BE extends Programmer {}
    class FE extends Programmer {}
    class DEVOPS extends Programmer {}
    
    class Startup {
        public Programmer $programmer;
    }
    
    function sayHello(Programmer $programmer) {
        if ($programmer instanceof BE) {
            echo "Halo {$programmer->name}, you are Backend Developer in Startup" . PHP_EOL;
        } else if ($programmer instanceof FE) {
            echo "Halo {$programmer->name}, you are Front-End Developer in Startup". PHP_EOL;
        } else if ($programmer instanceof DEVOPS) {
            echo "Halo {$programmer->name}, you are Dev-Ops Developer in Startup". PHP_EOL;
        }
    }

sayHello(new Programmer("Dappa"));
sayHello(new FE("Eko"));
sayHello(new BE("Imam Rosnanto"));