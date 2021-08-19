<!DOCTYPE html>
<html>
    <head>
        <title>Mobphone form</title>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="scripts/getdetails.js"></script>
        <link rel="stylesheet" href="css/main.css">
    </head>



<body>
    <div class="form-wrap">
        <div class="profile"><img src="images/user.png">
          <h1>Mobphone form</h1>
        </div>
        
        <form id="form1">
          <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" pattern="^[a-zA-Z](.[a-zA-Z0-9_-]*)$" >
          </div> 
          <div id="msg" background="black"></div>           
          <button type="submit" >Show login</button> 
        </form> 
       
      </div>
 
</body>









</html>