<?php
    class PerkTwo implements JsonSerializable{
        private $PerkTwoID;
        private $PerkTwoName;

        function jsonSerialize()
        {
            return[
                'PerkTwoID' => $this->getPerkTwoID(),
                'PerkTwoName' => $this->getPerkTwoName()
            ];
        }

        function getPerkTwoID(){
            return $this->PerkTwoID;
        }

        function getPerkTwoName(){
            return $this->PerkTwoName;
        }

        function setPerkTwoID($PerkID){
            $this->PerkTwoID = $PerkID;
        }

        function setPerkTwoName($PerkName){
            $this->PerkTwoName = $PerkName;
        }
    }
?>