<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
    <link rel="stylesheet" href ="style.css">
    <title>The Currency Calculator</title>
</head>
<body>
<div class="container">
<h1>Currency Converter</h1>

    <form method="post">
        <div class="form-group">
            <label>Convert From</label>
            <br>
            <select name="from" id="selector1">
            <option >Dollar</option>
            <option >Euro</option>

            </select>
            
        </div>
        <div class="form-group">
            <label>Convert To</label>
            <br>
            <select name="to" id="selector2">
            <option >Real</option>
            <option >Lira</option>
            <option >Mexican Peso</option>
            <option >Dirham</option>
            <option >Franc</option>
            </select>
        </div>
        <div class="form-group">
            <label>Amount</label>
            <input type="text" name="amount" class="form-control">
        </div>
        <div class="submit-group">
            <input type="submit" name="submit" class="button"  >   
        </div>   
    </form>
</div>

    <?php
    //CHECK IF THE FORM IS SUBMITTED
    //IF THE FORM IS SUBMITTED GET THE AMOUNT OF REALS
    //CONVERT THE AMOUNT OF REALS TO EUROS
    //USE THIS INFO IN OUR HTML


    // var_dump($_POST); this is the console.log of php

    //handling user input
    if(isset($_POST ["submit"])) {
    $from = $_POST["from"];
    $to = $_POST["to"];
    $amount = $_POST["amount"];


        if ($from =='Dollar' AND $to =='Real'){
            echo "<br><center><b style='background:pink; padding:10px;' > Result is: ";
            echo $amount*5,29;
            echo " R$";
            echo "</b>";
        }
        if ($from =='Euro' AND $to =='Real'){
            echo "<br><center><b style='background:pink; padding:10px;' > Result is: ";
            echo $amount*6,53;
            echo " R$";
            echo "</b>";
        }
        if ($from =='Dollar' AND $to =='Lira'){
            echo "<br><center><b style='background:pink; padding:10px;' > Result is: ";
            echo $amount*7,33;
            echo " ₺" ;
            echo "</b>";
        }
        if ($from =='Euro' AND $to =='Lira'){
            echo "<br><center><b style='background:pink; padding:10px;' > Result is: ";
            echo $amount*9,05;
            echo " ₺" ;
            echo "</b>";
        }

        if ($from =='Dollar' AND $to =='Mexican Peso'){
            echo "<br><center><b style='background:pink; padding:10px;' > Result is: ";
            echo $amount*19,76;
            echo " mx$" ;
            echo "</b>";
        }
        if ($from =='Euro' AND $to =='Mexican Peso'){
            echo "<br><center><b style='background:pink; padding:10px;' > Result is: ";
            echo $amount*24,38;
            echo " mx$" ;
            echo "</b>";
        }

        if ($from =='Dollar' AND $to =='Dirham'){
            echo "<br><center><b style='background:pink; padding:10px;' > Result is: ";
            echo $amount*3,67;
            echo " د.إ" ;
            echo "</b>";
        }
        if ($from =='Euro' AND $to =='Dirham'){
            echo "<br><center><b style='background:pink; padding:10px;' > Result is: ";
            echo $amount*4,53;
            echo " د.إ ";
            echo "</b>";
        }
        
        if ($from =='Dollar' AND $to =='Franc'){
            echo "<br><center><b style='background:pink; padding:10px;' > Result is: ";
            echo $amount*0,88;
            echo " ₣" ;
            echo "</b>";
        }
        if ($from =='Euro' AND $to =='Franc'){
            echo "<br><center><b style='background:pink; padding:10px;' > Result is: ";
            echo $amount*1,88;
            echo " ₣" ;
            echo "</b>";
        }
      


        
        
    }
        
    





    ?>
</body>
</html>