<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
  <body>
  <?php
      if(isset($_POST["registro"])){
          include_once("./conexion.php");
          $sql = "INSERT  INTO usuarios (nombre, correo, contrasena) VALUES ('".$_POST["user"]."', '".$_POST["email"]."', '".$_POST["pass"]."')";
          $conn->query($sql);
      }
    ?>
    <form action=""  method="post"  class="row g-3">
      <div class="col-md-4">
        <label for="user" class="form-label">Nombre</label>
        <input type="text" name="user" class="form-control is-valid" id="user" value="Mark" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="email" class="form-label">Correo</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
          <input type="text"  name="email" class="form-control is-invalid" id="email" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
          <div id="email" class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <label for="pass" class="form-label">contraseña</label>
        <input type="password" name="pass"   class="form-control is-valid" id="pass" value="password" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
          <label class="form-check-label" for="invalidCheck3">
            Agree to terms and conditions
          </label>
          <div id="invalidCheck3Feedback" class="invalid-feedback">
            You must agree before submitting.
          </div>
        </div>
      </div>
      <div for="registro "class="col-12">
        
      <a href="index.php"><button href="index.php" class=" btn-primary" type="submit" name="registro" id="registro" >registro</button></a>

      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>