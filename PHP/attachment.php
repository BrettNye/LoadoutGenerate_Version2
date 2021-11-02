<?php
    class Attachment implements JsonSerializable{
        private $weaponName;
        private $attachmentID;
        private $attachmentName;
        private $attachmentTypeID;
        private $attachmentTypeName;

        function jsonSerialize()
        {
            return[
                'WeaponName' => $this->getWeaponName(),
                'AttachmentID' => $this->getAttachmentID(),
                'AttachmentName' => $this->getAttachmentName(),
                'AttachmentTypeID' => $this->getAttachmentTypeID(),
                'AttachmentTypeName' => $this->getAttachmentTypeName()
            ];
        }

        function getWeaponName(){
            return $this->weaponName;
        }

        function getAttachmentID(){
            return $this->attachmentID;
        }

        function getAttachmentName(){
            return $this->attachmentName;
        }
        
        function getAttachmentTypeID(){
            return $this->attachmentTypeID;
        }

        function getAttachmentTypeName(){
            return $this->attachmentTypeName;
        }

        function setWeaponName($weaponName){
            $this->weaponName = $weaponName;
        }

        function setAttachmentID($attachmentID){
            $this->attachmentID = $attachmentID;
        }

        function setAttachmentName($attachmentName){
            $this->attachmentName = $attachmentName;
        }

        function setAttachmentTypeID($attachmentTypeID){
            $this->attachmentTypeID = $attachmentTypeID;
        }

        function setAttachmentTypeName($attachmentTypeName){
            $this->attachmentTypeName = $attachmentTypeName;
        }
    }
?>