<?php

echo "Email: ".$_POST['Email'];
?>


<html >
<head>
    <title> Form2 Email</title>
</head>
<body>
    
    <form method="post" action="email.php">
        
        <fieldset style="width: 190px;">
            
            <legend><b>EMAIL</b></legend>
        <input type="email" name="Email">
        
        <button title="hint:xyz@example.com" style="color: blue; font-size: 12px;"><b>i</b></button>
        <hr>
        <input type="submit" value="Submit">
            
        </fieldset>
        
        
    </form>
    
</body>
</html>