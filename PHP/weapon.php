<?php
    class Weapon implements JsonSerializable{
        private $weaponID;
        private $weaponName;
        private $weaponClass;
        private $weaponType;

        function jsonSerialize()
        {
            return[
                'WeaponID' => $this->getWeaponID(),
                'WeaponName' => $this->getWeaponName(),
                'WeaponClass' => $this->getWeaponClass(),
                'WeaponType' => $this->getWeaponType()
            ];
        }

        function getWeaponID(){
            return $this->weaponID;
        }

        function getWeaponName(){
            return $this->weaponName;
        }

        function getWeaponClass(){
            return $this->weaponClass;
        }

        function getWeaponType(){
            return $this->weaponType;
        }

        function setWeaponID($weaponID){
            $this->weaponID = $weaponID;
        }

        function setWeaponName($weaponName){
            $this->weaponName = $weaponName;
        }

        function setWeaponClass($weaponClass){
            $this->weaponClass = $weaponClass;
        }

        function setWeaponTypeID($weaponType){
            $this->weaponType = $weaponType;
        }
    }
?>