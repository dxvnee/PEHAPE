<?php
    $celcius = 30;
    $fahrenheit = 30;
    $reamur = 30;
    

    $CelciusToReamur = ($celcius * 4)/5;
    $CelciusToFahrenheit = (($celcius * 9)/5)+32;

    $FahrenheitToCelcius = (($fahrenheit-32)*5)/9;
    $FahrenheitToReamur = (($fahrenheit-32)*4)/9;

    $ReamurToCelcius = ($reamur * 5)/4;
    $ReamurToFahrenheit = (($reamur * 9)/4) + 32;

    echo "Celcius to Fahrenheit : $CelciusToFahrenheit\n";
    echo "Reamur to Fahrenheit : $ReamurToFahrenheit\n";
    echo "Celcius to Reamur : $CelciusToReamur\n";
    echo "Fahrenheit to Reamur : $FahrenheitToReamur\n";
    echo "Reamur to Celcius : $ReamurToCelcius\n";
    echo "Fahrenheit to Celcius : $FahrenheitToCelcius\n";


?>