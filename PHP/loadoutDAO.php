<?php
    class loadoutDAO{
        
        function getWeapons($class){
            require('./utilities/connection.php');
            require_once('weapon.php');

            $sql = "SELECT w.weaponID, w.weaponName, w.weaponClass, wt.weaponType FROM weapons w INNER JOIN weaponType wt on w.weaponTypeID = wt.weaponTypeID WHERE weaponClass = '" . $class . "'";

            $result = $conn->query($sql);
            $list = array();

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $weapon = new Weapon();
                    $weapon->setWeaponID($row['weaponName']);
                    $weapon->setWeaponName($row['weaponName']);
                    $weapon->setWeaponClass($row['weaponClass']);
                    $weapon->setWeaponTypeID($row['weaponType']);
                    $list[] = $weapon;
                }
            } else {
                echo "0 results";
            }
                $conn->close();
                return $list;
            }

            function GetValidAttachments($name){
                require_once('attachment.php');
                require('./utilities/connection.php');

                $sql = "SELECT weaponName, wa.attachmentID, attachmentName, a.attachmentTypeID, att.attachmentTypeName FROM weapons w INNER JOIN weaponattachments wa on w.weaponID = wa.weaponID
                INNER JOIN attachments a on wa.attachmentID = a.attachmentID INNER JOIN attachmentType att on a.attachmentTypeID = att.attachmentTypeID WHERE w.weaponName = '" . $name . "'";

                $result = $conn->query($sql);
                $list = array();

                if ($result->num_rows > 0) {
                // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $attachment = new Attachment();
                        $attachment->setWeaponName($row['weaponName']);
                        $attachment->setAttachmentID($row['attachmentID']);
                        $attachment->setAttachmentName($row['attachmentName']);
                        $attachment->setAttachmentTypeID($row['attachmentTypeID']);
                        $attachment->setAttachmentTypeName($row['attachmentTypeName']);
                        $list[] = $attachment;
                    }
                } else {
                    
                }
                $conn->close();
                return $list;
            }

            function GetPerkOne(){
                require('./utilities/connection.php');
                require('perkone.php');

                $sql = "SELECT * FROM PerkOne WHERE perkOneID = " . rand(1,6);
                
                $result = $conn->query($sql);
                $list;

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $perkOne = new PerkOne();
                        $perkOne->setPerkOneID($row['perkOneID']);
                        $perkOne->setPerkOneName($row['perkOneName']);
                        $list = $perkOne;
                    }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    return $list;
            }

            function GetPerkTwo(){
                require('./utilities/connection.php');
                require('perktwo.php');

                $sql = "SELECT * FROM PerkTwo WHERE perkTwoID = " . rand(1,9);
                
                $result = $conn->query($sql);
                $list;

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $perkTwo = new PerkTwo();
                        $perkTwo->setPerkTwoID($row['perkTwoID']);
                        $perkTwo->setPerkTwoName($row['perkTwoName']);
                        $list = $perkTwo;
                    }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    return $list;
            }

            function GetPerkThree(){
                require('./utilities/connection.php');
                require('perkthree.php');

                $sql = "SELECT * FROM PerkThree WHERE perkThreeID = " . rand(1,7);
                
                $result = $conn->query($sql);
                $list;

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $perkThree = new PerkThree();
                        $perkThree->setPerkThreeID($row['perkThreeID']);
                        $perkThree->setPerkThreeName($row['perkThreeName']);
                        $list = $perkThree;
                    }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    return $list;
            }

            function GetLethal(){
                require('./utilities/connection.php');
                require('lethal.php');

                $sql = "SELECT * FROM lethal WHERE lethalID = " . rand(1,7);
                
                $result = $conn->query($sql);
                $list;

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $lethal = new Lethal();
                        $lethal->setLethalID($row['lethalID']);
                        $lethal->setLethalName($row['lethalName']);
                        $list = $lethal;
                    }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    return $list;
            }

            function GetTactical(){
                require('./utilities/connection.php');
                require('tactical.php');

                $sql = "SELECT * FROM tactical WHERE tacticalID = " . rand(1,7);
                
                $result = $conn->query($sql);
                $list;

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $tactical = new Tactical();
                        $tactical->setTacticalID($row['tacticalID']);
                        $tactical->setTacticalName($row['tacticalName']);
                        $list = $tactical;
                    }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    return $list;
            }
    }
?>