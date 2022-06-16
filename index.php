<?php


$conexion=mysqli_connect('localhost','root','','taller'); //Se hace conexion a la base de datos taller del worckbench.
$sql="SELECT id,nombre FROM t_paises"; //Se hace referencia a los campos de la tabla y a la misma tabla.
$result=mysqli_query($conexion,$sql);//

?>

<!-- Resumen : Este pequeño codigo su fin es un el crear un pequeño buscador, y esto dependiendo de una tabla creada y utilizada para su
 funcionamiento, el fin de este es poder manipularla y escojer la opccion que prefieras.  -->

<!--Grid basica de html inicio... -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="select2/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="select2/select2.min.js"></script>
</head>
<body>
        <section style="text-align: center;"> <!--alineacion del texto al centro--> 
        <select id="controlBuscador" style="width:50%"><!--En este caso es el elemento creado y esta linea sirve para que sea mas grande -->
            <?php while($ver=mysqli_fetch_row($result)){ ?><!--Este while su funcion es que nos de las opcciones de la tabla importada y se pueda manipular
            y aparezcan todas funciones-->

            <option value="<?php echo $ver[0] ?>"><!--Se inicializara el buscador en 0 para que se pueden recorrer esto para que puedas ver el salta de las demas opcciones-->
                <?php echo $ver[1] ?>  <!--En este caso hace un aumento para las opcciones -->
        </option>
            <?php }?>               
        </select>
</section>
</body>
</html>
<!--Final de la grid basica de html -->
<script>
    
    $(document).ready(function(){

        $('#controlBuscador').select2();
        /**
     * En este caso este bloque de codigo de script rotisimo sirve para que al momento de buscar algun pais esta funcion nos ayude a acercar el elemento.
     * Esto refieriendo a los nombres y sea mas facil encontrarlos
     * 
     */
    });
</script>