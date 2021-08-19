<!DOCTYPE html>

<html>
    <head>
        <title>Form</title>
        <link rel="stylesheet" href="css/main.css">
    </head>



<body>
    <div class="form-wrap">
        <div class="profile"><img src="images/user.png">
          <h1>Form1</h1>
        </div>
        
        <form method="POST" action="authorize.php">
          <div>
            <label for="login">Login</label>
            <input type="text" name="login" id="login" pattern="^[a-zA-Z](.[a-zA-Z0-9_-]*)$" >
          </div>
              
          <div>
          <label for="password">Пароль</label>
          <input type="password" name="password" required>
        </div>
          <button type="submit" >Show</button> 
        </form> 
      </div>
      
</body>









</html>