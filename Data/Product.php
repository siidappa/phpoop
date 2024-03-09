<?php 

namespace ProductData {
    class Product {
        protected string $name;
        protected int $price;
    
        public function __construct(string $name, int $price)
        {
            $this->name = $name;
            $this->price= $price;
        }

        public function getName(): string {
            return $this->name;
        }
        public function getPrice(): string {
            return $this->price;
        }
    }

    
    class ProductDummy extends Product {
        public function info() {
            echo $this->name;
            echo $this->price;
        }
    }
}
