<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,200&family=Montserrat:wght@400;600&family=Raleway:wght@200&display=swap');

body {
  background-color: #F0F0F0;
  font-family: Montserrat;
}

h1 {
  text-align: center;
  color: #555;
}

form {
  background-color: #FFF;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  padding: 20px;
  margin: 50px auto;
  max-width: 500px;
}

label {
  font-size: 18px;
  color: #555;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 3px;
  border: 1px solid #AAA;
  font-size: 16px;
}

button[type="submit"] {
  background-color: #2196F3;
  color: #FFF;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  font-size: 18px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color: #0D8AFF;
}

@media (max-width: 768px) {
  form {
    margin: 30px auto;
    padding: 10px;
  }
}



</style>



</head>
<body>
    <form class="form-horizontal" action="login.php" method="POST">
        <h1>LOGIN</h1><br>
        <div class="form-group">
            <label class="col-sm2 control-label">Username</label>
            <div class="col-sm-10">
                <input type="text" name="username" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm2 control-label"></label>
            <div class="cpl-sm-6">
                <button type="Submit" name="submit" class="btn btn-primary">Login</button>
            </div>
        </div>

    </form>
</body>
</html>