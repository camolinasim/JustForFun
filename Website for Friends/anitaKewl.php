<html>
<body>

<form action = "anitaKewl.php" method = "get">


    Name: <input type = "text" name = "username">
    <input type ="submit">

</form>
<br>

<?php
//imagePrint();
// echo "<img src='temmie.jpg' />";

prettyPrint();

$anitaInput = $_GET['username'];

if($anitaInput == null || "") {
   echo "";
}

elseif ($anitaInput === "Ana" || $anitaInput === "Anita" || $anitaInput === "Ana Edwards" || $anitaInput === "ana" || $anitaInput === "anita"){


    anaPrint($anitaInput);

}
elseif($anitaInput == "guillermo") myDungSchlong($anitaInput);
elseif($anitaInput == "aurora") auroraPrint($anitaInput);
elseif($anitaInput == "edward" || $anitaInput =="eduardo") edPrint($anitaInput);
elseif($anitaInput == "orlando" || $anitaInput=="orly") orlyPrint($anitaInput);
elseif($anitaInput == "david" || $anitaInput=="dave") orlyPrint($anitaInput);


    else
       guestPrint($anitaInput);






    function prettyPrint(){
        echo '<p>' . "HOI!!! im temmie" .'</p>';
        echo '<p>'. "tem find new fwend!!" . '</p>';
        echo "wat name u is, fwend? :)";
    }

    function anaPrint($userInput){
        echo '<p>' ."HOI!!! " . $userInput . " u must be Cris' fwend!! He has told me that u awechome!! :))". '</p>';
    }

    function guestPrint($userInput){
        echo '<p>'. "HOI!!! " . $userInput . "  u are temms new fwend!! :)" .'</p>';
    }

function myDungSchlong($userInput){
    echo '<p>' ."HOI!!! " . $userInput . "YOU SUCK!! (this was written by guillermo btw)". '</p>';
}

function auroraPrint($userInput){
    echo '<p>' ."HOI!!! " . $userInput . " YOU COOL!!". '</p>';
}

function edPrint($userInput){
    echo '<p>' ."HOI!!! " . $userInput . " ME HUNGER GIMME BURGARS :)))". '</p>';
    echo '<p>'. "Also, your face is gay ^^" .'</p>';
    echo '<p>'. "LETS GOOOO YOU HEITHEENN!!!" .'</p>';

}

function orlyPrint($userInput){
    echo '<p>' ."HOI!!! " . $userInput . " Cristian doesn't wan't you to know but he actually only has 11 bucks :)". '</p>';
    echo '<p>' ."let's get something cheap plox xD". '</p>';
}

function davidPrint($userInput){
    echo '<p>' ."HOI!!! " . $userInput . " hey bro you're cool :)". '</p>';
    echo '<p>' ."let's get something cheap plox xD". '</p>';
}

?>

</body>

</html>

