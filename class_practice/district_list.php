<?php
    $districts = array(1=>["Manikgoang", "Naraiangoang", "Dhaka"], 2=>["jhenaidah", "Magura", "Jassore"], 3=>["Patuakhali", "Vola", "Barisal"], 4=>["Sitakundu"]);
    $id = ($_POST["id"]);
    $lists = $districts[$id];
    foreach($lists as $list){
        echo "<option>" . $list . "</option>";
    }


?>
<!-- id ta dorte parci -->