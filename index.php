<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hlavny nadpis</h1>
    <?php
        echo "Vypis <br>";
        $meno = "Peter <br>";
        echo $meno;
        //var_dump
        var_dump($meno);

        //Polia
        $farby = array("cervena","modra","zelena");  //indexove polia
        echo $farby[0];   //vypise cervena
        echo("<br>");

        //Cyklus
        foreach($farby as $farba){
            echo "Farba:". $farba. "<br>";
        }

        //python dictionary  kluc : hodnota
        $data = array("Peter" => 25,
                    "Jana" => 30,
                    "Marek" => 20
                    );
        foreach($data as $name => $age){
            echo "$name ma $age rokov <br>";
        }

    ?>
</body>
</html>