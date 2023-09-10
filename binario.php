<!DOCTYPE html>
<html lang="es">
<head>
    <title>binario</title>
</head>
<body>
    <form action="" method="post">
        numero con base 10:  <input type="number" name="base10" required>
        <small>*maximo es 255</small>
        <button>enviar</button>
    </form>    
<?php 
/*
NOMBRE DEL ALUMNO: AVIÑA NERI LEONARDO DANIEL
GRUPO:5PRAM
*/
if($_POST && $_POST['base10']){

    $base10= $_POST['base10'];
    $modulo=0;
    $binario=[];
    $division=0;
    // while($division!=0){
    for ($i=0; $i < 8; $i++) { 
        $division= floor($base10/2);
        $modulo=$base10%2;
        array_unshift($binario,$modulo);
        $base10=$division;
    } 
    echo "<table> 
            <tr>
                <th>128</th>
                <th>64</th>
                <th>32</th>
                <th>16</th>
                <th>8</th>
                <th>4</th>
                <th>2</th>
                <th>1</th>
            </tr>
            <tr>";  
    foreach ($binario as $b) {
        echo "<td>$b</td> ";
    }
    echo "</tr> <table>"; 

    $binario=implode($binario);//convertirlo a string
    $base10= $_POST['base10'];
    echo "<br><span> el numero $base10 en binario es: $binario</span><br>";

}
?>
    <section class="flex">
        <img src="https://crehana-blog.imgix.net/media/filer_public/91/07/910755ee-2c87-405f-aef3-55263e362093/codigo-ascii-binario-alfabeto.jpeg?auto=format&q=50" width="30%">
        <img src="https://1.bp.blogspot.com/-7JfEzdWfVvg/VG2fexTeboI/AAAAAAAAAEw/07OkSAZI1ks/s1600/codigo%2Bascii.JPG" width="70%">
    </section>
</body>
</html>

<style>
    .flex{
        display: flex;
        flex-wrap: nowrap;
    }
    span{
        font-size: 26px;
    }
    small{
        font-size: 16px;
        color: red;
    }
    form{
        margin: 20px auto;
        font-size: 30px;
    }
    table{
        border: 2px solid #000;
        width: 500px;
        max-height: 99%;
        margin-right: 20px;
        border-collapse: collapse;
        background-color: #ebebeb;
    }

    td, th {
        margin: 0;
        border: 2px solid #000;
        text-align: center;
        max-height: 116px;
        background-color: lightcoral;
    }

    td{
        background-color: #ebebeb;
    }

    tr{
        max-height: 116px;
    }
</style>