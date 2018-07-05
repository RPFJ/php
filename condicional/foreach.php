<form>
    <input type="text" name ="nome:">
    <input type="date" name="Nascimento">
    <input type="submit" value ="OK">

</form>



<?php
    /*$meses = array(
        "Janeiro", "Fevereiro", "Marco", "Abril",
        "Maio", "Junho", "Julho","Agosto",
        "Setembro", "Outubro", "Novembro", "Dezembro"
    );

    foreach($meses as $index => $mes){
        echo "Indice: " . $index . "<br>";
        echo "O mês é: " . $mes . "<br><br>"; 
    }*/

    if (isset($_GET)){

        foreach($_GET as $key => $value){

            
            echo "Nome do campo: " . $key;
            echo "<br>";

            echo "Valor do campo: " . $value;
            echo "<br>";

            echo "<hr>";

        }
    }





?>