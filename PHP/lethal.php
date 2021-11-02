<?php
    class Lethal implements JsonSerializable{
        private $lethalID;
        private $lethalName;

        function jsonSerialize()
        {
            return[
                'LethalID' => $this->getLethalID(),
                'LethalName' => $this->getLethalName()
            ];
        }

        function getLethalID(){
            return $this->lethalID;
        }

        function getLethalName(){
            return $this->lethalName;
        }

        function setLethalID($lethalID){
            $this->lethalID = $lethalID;
        }

        function setLethalName($lethalName){
            $this->lethalName = $lethalName;
        }
    }
?>