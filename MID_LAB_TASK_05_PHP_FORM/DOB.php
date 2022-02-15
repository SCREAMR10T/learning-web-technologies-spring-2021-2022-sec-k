<?php

if(isset($_REQUEST['submit'])){
    
    if($_REQUEST['day']=="" or $_REQUEST['month']=="" or $_REQUEST['year']==""){
        
        echo "Please input all the fields";
        
    }
    
    else{
        
        
        echo "Date of Birth ".$_REQUEST['day']."/".$_REQUEST['month']."/".$_REQUEST['year'];
        
    }
    
    
}


?>



<html>
<head>
   
    <title>form 3</title>
</head>
<body>
    
    <form method="post" action="dateOfBirth.php">
        
        <fieldset style="width:200px">
            
            <legend><b>DATE OF BIRTH</b></legend>
            <pre>  dd      mm     yyyy</pre>
            <input type="tel" name="day" size="1"><b> /</b>
              <input type="tel" name="month" size="1"><b> /</b>
              <input type="tel" name="year" size="2">
               <hr>
                
        <input type="submit" value="Submit">
        </fieldset>
        
        
        
    </form>
    
</body>
</html>