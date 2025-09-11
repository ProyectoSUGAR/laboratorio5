<?php 
    $name = $_POST["nombre"];
    $dni = $_POST["dni"];
    $loc = $_POST["local"];
    $dir = $_POST["direc"];
    $cel = $_POST["telefono"];
    $mail = $_POST["email"];
    $uno = $_POST["uno"];
    $dos = $_POST["dos"];
    $tres = $_POST["tres"];
    $cuatro = $_POST["cuatro"];
    $cinco = $_POST["cinco"];
    $seis = $_POST["seis"];
    $siete = $_POST["siete"];
    $ocho = $_POST["ocho"];
    $nueve = $_POST["nueve"];
    $diez = $_POST["diez"];
    $media = $uno + $dos + $tres + $cuatro + $cinco + $seis + $siete + $ocho + $nueve + $diez;
    $media1 = $media / 10;



    if ($uno > 12|| $dos > 12 || $tres > 12 || $cuatro > 12 || $cinco > 12 || $seis > 12 || $siete > 12 || $ocho > 12 || $nueve > 12 || $diez > 12 ) {

        echo "su calificación debe ser menor o igual que 12";
    
} else {

    if ($media1 <= 3){
echo "Hola ".$name.", su cédula es ".$dni.", vive en la localidad ".$loc.", en la dirección ".$dir.", tiene el número ".$cel." y su dirección gmail es ".$mail."<br>";
echo "Su media es de: ".$media1.", tendrá que hacer examen en febrero."."<br>";       
} else if ($media1 <= 7) {
echo "Hola ".$name.", su cédula es ".$dni.", vive en la localidad ".$loc.", en la dirección ".$dir.", tiene el número ".$cel." y su dirección gmail es ".$mail."<br>";
echo "Su media es de: ".$media1.", tendrá que hacer examen reglamentado."."<br>";
} else if ($media1 <= 12) {
echo "Hola ".$name.", su cédula es ".$dni.", vive en la localidad ".$loc.", en la dirección ".$dir.", tiene el número ".$cel." y su dirección gmail es ".$mail."<br>";
echo "Su media es de: ".$media1.", usted exoneró."."<br>" ;
        } else {
echo "Su calificación es menor que 1";
        }

    }

  echo '<a href="index.php"><button>Volver</button></a>'
?>