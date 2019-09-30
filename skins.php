<!DOCTYPE html>
<html>
<head>
    <?php
        if(isset($_POST["boton"])){
            echo $_POST["dropdown"];
            echo '<link rel="stylesheet" type="text/css" href="./css/'.$_POST["dropdown"].'"/>';
        }
     ?>
</head>
<body>
<form method = "POST" action="skins.php">
<select name="dropdown">
    <?php
        $dirStr = "css/";
        $dir = opendir($dirStr);
        while (($archivo = readdir($dir)) !== false) {
            if (is_file( $dirStr . $archivo)) {
            echo "<option>$archivo</option>";
            }
    }
    closedir($dir);
    ?>
</select>
    <br/>
    <input type="submit" name="boton"/>
</form>
</body>
</html>
