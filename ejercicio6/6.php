<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 6</title>
</head>
<body>
<header>
    <?php include '../header.php'; ?>
</header>
<main>

    <?php

    //ejercicio explicado por el profe facu clase 15/04
    class saludar
    {
        private $nombre;
        private $apellido;

        public function __construct($nombre, $apellido)
        {
            $this->nombre = $nombre; //llamo al atributo nombre y asigno lo que me pasaron por $nombre
            $this->apellido = $apellido;
        }

        public function saludoFormal($horario)
        {
            return "<div>" . $this->getSaludoPorHorario($horario) . "$this->nombre $this->apellido </div>";
        }

        private function getSaludoPorHorario($horario)
        {
            $saludo = "";
            if ($horario >= 5 && $horario <= 13) {
                $saludo = "buenos dias ";
            } elseif ($horario > 13 && $horario <= 21) {
                $saludo = "buenas tardes ";
            } else {
                $saludo = "buenas noches ";
            }
            return $saludo;
        }

        public function saludoInformal($horario)
        {
            return "<div>¡Hola " . $this->nombre . " " . $this->apellido . "!" . $this->getSaludoPorHorario2($horario) . "</div>";
        }

        private function getSaludoPorHorario2($horario)
        {
            $saludo = "";

            if ($horario >= 5 && $horario <= 13) {
                $saludo = " que tengas un buen dia!";
            } elseif ($horario > 13 && $horario <= 21) {
                $saludo = " que tengas una buena tarde!";
            } else {
                $saludo = " que tengas una bonita noche!";
            }
            return $saludo;
        }


    }


    //aplicaicon
    $saludo = new saludar("Agustin", "Dmngz"); //creo al objeto, se asigna a una variable, la variable llama a los metodos con la flechita
    echo $saludo->saludoFormal(6);
    echo $saludo->saludoFormal(15);
    echo $saludo->saludoFormal(22);

    echo $saludo->saludoInformal(6);
    echo $saludo->saludoInformal(15);
    echo $saludo->saludoInformal(22);

    ?>

</main>
</body>
</html>
