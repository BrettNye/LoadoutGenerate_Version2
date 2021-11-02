<?php
    class PerkOne implements JsonSerializable{
        private $PerkOneID;
        private $PerkOneName;

        function jsonSerialize()
        {
            return[
                'PerkOneID' => $this->getPerkOneID(),
                'PerkOneName' => $this->getPerkOneName()
            ];
        }

        function getPerkOneID(){
            return $this->PerkOneID;
        }

        function getPerkOneName(){
            return $this->PerkOneName;
        }

        function setPerkOneID($PerkID){
            $this->PerkOneID = $PerkID;
        }

        function setPerkOneName($PerkName){
            $this->PerkOneName = $PerkName;
        }
    }
?>