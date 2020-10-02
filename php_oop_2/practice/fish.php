<?php

    class fish
    {
        public $common_name;
        public $falvor;
        public $record_weight;
        


        public function getInfo() {
            return "A {$this->common_name} is an {$this->flavor} flavored fish. The world record weight is
            {$this->record_weight}.";
        }
        public function __construct($common_name,$flavor,$record_weight)
        {
            $this->common_name=($common_name);
            $this->flavor=($flavor);
            $this->record_weight=($record_weight);
        }
    }

    // echo new fish()->getInfo();
    // $bass= new fish();
   $bass = new fish("Largemounth  Bass","Excellent","22 pounds 5 ounces");
   echo $bass->getInfo();

?>