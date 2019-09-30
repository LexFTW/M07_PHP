
<!DOCTYPE html>
<html>
  <head>
      <?php
          if(isset($_POST["boton"])){
              echo '<link rel="stylesheet" type="text/css" href="./css/'.$_POST["dropdown"].'"/>';
          }
       ?>
  </head>
  <body>
    <div class="content">
      <div class="one-columns">
        <div class="card">
          <div class="card-body">
            <form method="POST" action="skins.php">
              <select name="dropdown" class="form-control">
                  <?php
                      $dirStr = "./css/";
                      $dir = opendir($dirStr);
                      while (($archivo = readdir($dir)) !== false) {
                          if (is_file( $dirStr . $archivo)) {
                          echo "<option>$archivo</option>";
                          }
                  }
                  closedir($dir);
                  ?>
              </select>
              <input class="btn btn-primary float-right" type="submit" name="boton"/>
            </form>
          </div>
        </div>
      </div>
      <div class="two-columns">
        <div class="card">
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
