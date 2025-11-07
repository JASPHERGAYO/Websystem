<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/style2.css">
</head>
<body>
  <div class="container">
    <div class="form-box active">
      <h1>You are now logged out</h1>
 
  
        <button type="button" onclick="window.location.href='login.php'" class="logout-btn">Go back to Login</button>
   
        <div class="center-link">
          <p>Create a new account? <a href="register.php">Register</a></p>
        </div>
      </form>
    </div>
  </div>
 <script>
  localStorage.clear();
  window.location.href = "login.php";
</script>

</body>
</html>
