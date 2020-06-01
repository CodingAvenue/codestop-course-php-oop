<?php
    class Plant 
    {
        public $type = "Tree";
        
        public function grow()
        {
            echo "Plants grow everywhere.";
        }
    }
    
    $plant = new Plant();
    $plant->grow();
?>
