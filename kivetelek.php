<?php
print_r( $_POST);

require_once "config.php";
$msg="";


if(isset($_POST["mentes"])){
    extract($_POST);
    
    
    $sql="insert into film values (null,'{$datum}','{$unnepnap}','{$munkanap}')";
    echo $sql;
    $stmt=$db->exec($sql);
    if($stmt){
        $msg="Sikeres adatbeírás!";
    }else{
        $msg="HIBA!";
    }
}


?>


<h1>Munka és munkaszüneti napok bevezetése:</h1>
<form method="post">
    <input type="date" name="datum" id="" required>
    <input type="checkbox" name="unnepnap" id="">Ünnepnap?
    <input type="checkbox" name="munkanap" id="">Munkanap?
    <input type="submit" name="mentes" value="Mentés">
    
</form>

<div>

<?=$msg?>

</div>
