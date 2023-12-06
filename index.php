<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Integradora Obligatoria Módulo 1</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <header>
        <h1>Actividad Integradora Módulo 1</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
    </nav>

    <main>
        <?php
        // Variables
        $precioManzanas = 600;
        $inflacion = 10;
        $diciembre = "5/12/2023";
        $enero = "05/01/24";

        // Constante
        define("DESCUENTO", 50);
        define("IMPUESTO", 11);
       
        // Operadores más complejos
        $precioConInflacion = $precioManzanas + ($precioManzanas * $inflacion / 100);
        $descuentoAdicional = ($precioConInflacion * DESCUENTO) / 100;
        $precioConDescuento = $precioConInflacion - $descuentoAdicional;
        $impuestoAplicado = ($precioConDescuento * IMPUESTO) / 100;
        $precioFinal = $precioConDescuento + $impuestoAplicado;


        //Mensaje
        $mensaje = "El precio de las manzanas en diciembre fue de $$precioManzanas.<br> En enero, con la inflación del $inflacion%, el precio ajustado es de $$precioConInflacion. <br>";
        $mensaje .= "Se aplicó un descuento del $descuentoAdicional ($DESCUENTO% del precio ajustado) y un impuesto del $impuestoAplicado ($IMPUESTO% del precio con descuento). <br>";
        $mensaje .= "El precio final es de $$precioFinal.";

        ?>

        <h2>Detalles de la transacción</h2>
        <p><?php echo $mensaje; ?></p>


    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Actividad Integradora Módulo 1</p>
    </footer>

</body>

</html>