<?php
    class Plant 
    {
        public $type = "Tree";
        
        public function grow()
        {
            echo "Plants grow everywhere.";
        }
    }
    
    $plantObject = new Plant();
    $plantObject->grow();
?>
