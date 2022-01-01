<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
  <title>Calculator</title>
  
<style>

form{
    width: 500px;
    margin: 100px auto;
}

#input{
    border:1px solid gray;
    text-indent: 10px;
    width: 300px;
    height: 50px;
    background: rgb(6, 192, 146);
    font-size: 17px;
}

#buttonn{
    border:1px solid gray;
    width: 100px;
    height: 55px;
    background: rgb(6, 192, 146);
     cursor: pointer;
}

#buttonn:hover{
    background: blue;
   
}
.topic{
padding-left:250px;
 width: 500px;

  margin-left: 300px;
  border:2px solid gray;
}



</style>
</head>

<body>
<div>
       <?php
if (isset($_REQUEST['input'])) {
    $userInput = $_REQUEST['input'];
    try {
        echo calculator($userInput);
    }
    catch (ParseError $error) {
        echo "try again";
    }
    catch (Error $error) {
        echo $er->getMessage();
    }
}

function calculator($userInput){
    $input = preg_replace("/[^a-z0-9+\-*\/]/", "", $userInput);
    $result = "NULL";
    if ($result != "")
        $result = @eval("return " . $input . ";");
    if ($result == null)
        throw new Error("Error!");
    return $result;
}

echo "<br><hr><br><a href='index.html'>Back</a>";
   
        ?>
</div>
</body>

</html>



    

  
