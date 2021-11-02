<?php
    class Tactical implements JsonSerializable{
        private $tacticalID;
        private $tacticalName;

        function jsonSerialize()
        {
            return[
                'TacticalID' => $this->getTacticalID(),
                'TacticalName' => $this->getTacticalName()
            ];
        }

        function getTacticalID(){
            return $this->tacticalID;
        }

        function getTacticalName(){
            return $this->tacticalName;
        }

        function setTacticalID($tacticalID){
            $this->tacticalID = $tacticalID;
        }

        function setTacticalName($tacticalName){
            $this->tacticalName = $tacticalName;
        }
    }
?>