<?php
$mActual = date("m");
$aActual = date("Y");


include("./config1.php");
$av_array=[];

for($i = A_INICIO; $i <= A_FINAL; $i++){
    $anno = $i ."/" . $i + 1;
    if($i == $aActual-1  && $mActual < 8 || $i==$aActual && $mActual >8){
        $check= "selected";
        
    }
    else{
        $check ="";
    }
    $av_array[]=[$anno, $check];

}
//var_dump($av_array);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<br>
    <form method="POST" action="precesarForm.php">
    <label for="grupo">Selecciona el grupo:</label>
        <select name="grupo" id="grupo">
            <?php
            foreach ($grupos as $grupo) {
                echo "<option value=\"$grupo\">$grupo</option>";
            }
            ?>
        </select>
        <br><br>

        <label for="formato">Selecciona el formato:</label>
        <select name="formato" id="formato">
            <?php
            foreach ($formatos as $formato) {
                echo "<option value=\"$formato\">$formato</option>";
            }
            ?>
        </select>
        <br><br>

<label for="curso">Selecciona el curso:</label>
<select name="curso" id="curso">
    <?php
    foreach ($av_array as $anno) {
        echo "<option value=".$anno[0]." ".$anno[1].">".$anno[0]."</option>";
    }
    ?>
</select>

    </form>
</body>
</html>