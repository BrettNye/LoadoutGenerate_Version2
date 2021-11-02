<?php
    header('Access-Control-Allow-Headers: Content-Type');
    header('Access-Control-Allow-Origin: http://localhost:4200');
    header('Access-Control-Allow-Method: POST');
    header('Content-Type: application/json');
    header('Accept: application/json');
    
    require_once('./loadoutDAO.php');
    require_once('attachment.php');
    $loadoutDAO = new loadoutDAO();

    $validAttachments;
    $selectedAttachments;

    $primaryWeaponList = $loadoutDAO->getWeapons('Primary');
    $secondaryWeaponList = $loadoutDAO->getWeapons('Secondary');
    $perkOne = $loadoutDAO->GetPerkOne();
    $perkTwo = $loadoutDAO->GetPerkTwo();
    $perkThree = $loadoutDAO->GetPerkThree();
    $lethal = $loadoutDAO->getLethal();
    $tactical = $loadoutDAO->getTactical();

    $selectedWeapon = ChooseWeapon($primaryWeaponList);
    $validAttachments = $loadoutDAO->GetValidAttachments($selectedWeapon->getWeaponName());
    $selectedAttachments = Attachments($validAttachments);
    $Loadout[] = $selectedWeapon;
    $Loadout[] = $selectedAttachments;

    if($perkTwo->getPerkTwoID() == 3 || $perkTwo->getPerkTwoID() == 8 || $perkTwo->getPerkTwoID() == 9){
        $selectedWeaponTwo = ChooseWeapon($primaryWeaponList);
    } else{
        $selectedWeaponTwo = ChooseWeapon($secondaryWeaponList);
    }
    $validAttachments = $loadoutDAO->GetValidAttachments($selectedWeaponTwo->getWeaponName());
    $selectedAttachments = Attachments($validAttachments);
    $Loadout[] = $selectedWeaponTwo;
    $Loadout[] = $selectedAttachments;

    $Loadout[] = $perkOne;
    $Loadout[] = $perkTwo;
    $Loadout[] = $perkThree;
    $Loadout[] = $lethal;
    $Loadout[] = $tactical;

    echo json_encode($Loadout);

    function ChooseWeapon($list){
        $selected = rand(1, count($list)-1);
        return $list[$selected];
    }

    function Attachments($valid){
        $chosenAttachmentTypes = array();
        $chosenAttachments = array();
        $number = count($valid);
        if($valid){
            for($i = 0; $i < 5; $i++){
                $select = rand(1, $number-1);
                    while(in_array($valid[$select]->getAttachmentTypeID(), $chosenAttachmentTypes)){
                    $select = rand(1, $number-1);
                    }
                    $chosenAttachmentTypes[] = $valid[$select]->getAttachmentTypeID();
                    $chosenAttachments[] = $valid[$select];
                }
        }
        return $chosenAttachments;
        }
?>