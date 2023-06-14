<?php
$people_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/arc6828/SCS211/main/week13/staff.json"),true);
$people = $people_obj["people"];
?>

<?php foreach($people as $row){ ?>
    <div><?=$row["id"]?>  <?=$row["name"]?></div> 
     <?=$row["education"]?></div>  <?=$row["role"]?></div> 
     <?=$row["email"]?></div>  <?=$row["phone"]?></div> 
    
<?php } ?>