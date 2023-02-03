<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Back End Web Development: Assignment One</h1>
    <?php
        if (!isset($_GET['firstName'])) {     
            echo "Incomplete Data Decected: FIRST NAME REQUIRED <br>";
        } 
        else if (!isset($_GET['lastName'])) {
            echo "Incomplete Data Decected: LAST NAME REQUIRED <br>";
        }
        else if (!isset($_GET['age'])) {
            echo "Incomplete Data Decected: AGE REQUIRED <br>";
        }
        else {
            $firstName = filter_input(INPUT_GET, 'firstName', FILTER_SANITIZE_SPECIAL_CHARS);  
            $lastName = filter_input(INPUT_GET, 'lastName', FILTER_SANITIZE_SPECIAL_CHARS);
            $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_SPECIAL_CHARS); //return data

            echo"Hello, my name is <i>$firstName $lastName</i>, <br>";
            if ($age >= 18){
                echo 'I am <b>' . $age . '</b> years old and I <u>am old</u> enough to vote in the United States. <br>';
            }
            else {
                echo "I am $age years old and I am <u>not old</u> enough to vote in the United States. <br>";
            }
            echo $age . " years is " . $age*365 . " days. <br>";
            echo "Date of check: " . date("m/d/Y");
        }

       
    ?>
    
</body>
</html>