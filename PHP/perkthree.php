<?php
    class PerkThree implements JsonSerializable{
        private $PerkThreeID;
        private $PerkThreeName;

        function jsonSerialize()
        {
            return[
                'PerkThreeID' => $this->getPerkThreeID(),
                'PerkThreeName' => $this->getPerkThreeName()
            ];
        }

        function getPerkThreeID(){
            return $this->PerkThreeID;
        }

        function getPerkThreeName(){
            return $this->PerkThreeName;
        }

        function setPerkThreeID($PerkID){
            $this->PerkThreeID = $PerkID;
        }

        function setPerkThreeName($PerkName){
            $this->PerkThreeName = $PerkName;
        }
    }
?>