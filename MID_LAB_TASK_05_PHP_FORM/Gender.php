
<?php

if (isset($_POST['gender']))   
  echo "Gender: ".$_POST['gender'];    
else
  echo "nothing was selected.";


?>


<html>
<head>
 
    <title> Form 4</title>
</head>
<body>
    
    <form method="post" action="gender.php">
        
        <fieldset style="width:200px">
            
            <legend><b>GENDER</b></legend>
         
            
                <input type="radio" name="gender" value="Male" > Male 
				<input type="radio" name="gender" value="Female"  > Female
				<input type="radio" name="gender" value="Other" > Other <br>
            <hr>
            
        </fieldset>
        <br>
        <input type="submit" value="Submit">
        
    </form>
    
</body>
</html>