<?php



if(empty($_POST['degree'])){
    
    echo " select a degree";
    
}
else{
    
    $degree = $_POST['degree'];
    
    for($i = 0; $i < count($degree); $i++){
        
        echo "Degree: ".$degree[$i]."<br>";
        
    }
    
}

?>

<html> 

<head>
    <title>Form5</title>
</head>

<body>

    <form method="post" action="degree.php">

        <fieldset style="width:250px">

            <legend><b>DEGREE</b></legend>
            <input type="checkbox" name="degree[]" value="SSC"> SSC
            <input type="checkbox" name="degree[]" value="HSC"> HSC
            <input type="checkbox" name="degree[]" value="Bsc"> Bsc
            <input type="checkbox" name="degree[]" value="Msc"> Msc
            <hr>
            <input type="submit" value="Submit">
        </fieldset>




    </form>

</body>

</html>