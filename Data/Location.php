<?php 

namespace Data{
    abstract class Location {
        public string $name;
    }

    class City extends Location {
        
    }

    class Country extends Location {

    }
}