<?php



echo
"<form action='' method='get'>  
    <div style='margin:1em auto; max-width:500px;'>
    <div style='margin-top: 1em;display: flex; flex-direction: column'>
        <label for='number_one'>Primul numar</label>
        <input name='number_one' type='number' id='number_one' required> 
    </div>
     <div style='margin-top: 1em; display: flex; flex-direction: column'>
        <label for='number_one'>Al doilea numar</label>
        <input name='number_two' type='number' id='number_two' required>
    </div>    
    <div style='margin-top: 1em; display: flex; flex-direction: column'>
        <label for='operation'>Alege Operatiunea</label>
        <select name='operation' id='operation' required>
            <option value='adunare'>Adauga</option>
            <option value='scadere'>Scade</option>
            <option value='inmultire'>Inmulteste</option>
            <option value='impartire'>Imparte</option>    
        </select>
    </div>
        <div style='margin-top: 1em;'>
             <input type='submit' name='Calculeaza'>
        </div>
    </div>
</form>";

if (isset($_GET["number_one"], $_GET["number_two"], $_GET["operation"])) {
     $numberOne = filter_var($_GET["number_one"], FILTER_VALIDATE_INT) ? (int)$_GET["number_one"] : null;
     if (!$numberOne) {
         echo 'Primul numar are valoare invalida';
         die;
     }

    $numBerTwo = filter_var($_GET["number_two"], FILTER_VALIDATE_INT) ? (int)$_GET["number_two"] : null;
    if (!$numBerTwo) {
        echo '<Al doilea numar are valoare invalida';
        die;
    }

    switch ( $_GET["operation"]) {
        case 'adunare':
            $result = $numberOne + $numBerTwo;
            echo "Rezultatul operatiei de adunare este {$result}";
            die;
        case 'scadere':
            $result = $numberOne - $numBerTwo;
            echo "Rezultatul operatiei de scadere este {$result}";
            die;
        case 'inmultire':
            $result = $numberOne * $numBerTwo;
            echo "Rezultatul operatiei de inmultire este {$result}";
            die;
        case 'impartire':
            $result = number_format($numberOne / $numBerTwo,2);
            echo "Rezultatul operatiei de inmultire este {$result}";
            die;
        default:
            die;
    }






}






