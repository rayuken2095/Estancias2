<?php
//header("location:index.php");

session_start();
//echo "hola";
$usuario=$_POST['email'];
$password=$_POST['pass'];
//echo $usuario;

include("../../DB/conect.php");
//$conexion = new mysqli("localhost","root","root","vinculacion_est2");
//echo "nombre"."<br>".$usuario."<br>";
//echo "pass ".$password;
$text;
$proceso=("SELECT ID, Name from empresa WHERE Mail='$usuario' AND Password='$password'" );
$res= $conexion->query($proceso);
//echo $proceso;


	if($row=$res->fetch_array()){
		echo "entre";
		ob_start();

		//echo $row[0] ;
		//variables que se necesitan en SESSION
		$_SESSION['id']=$row[0];
		$_SESSION['nom']=$row[1];
		$_SESSION['on'] = true;
		//echo $_SESSION['id'];
		//header('location:sesion.php');
		header('location:index.php');
		exit();
		ob_end_flush();
		//Manda();
		//header("Location: wwww.googlge.com");
		//header('location:sesion.php');
		//echo "sesion exitosa".$_SESSION['id'];
		//echo "Co,mo";

		//header("Location: index.php");
		//header("location:index.php")
		//header("location:index.php");
	}
		else {
      //echo "no entro";
			$validacion = " SELECT Mail FROM empresa WHERE Mail='$usuario' ";

        $resultado = $conexion->query($validacion);

        if ($resultado->num_rows > 0 ) {
        	$text ="El password es incorrecto";
        }else{
        	$text ="El correo es incorrecto";
        }

		//header("Location: index.php");
			//header('location:sesion.php');
		//echo "sesion no exitosa";
	 }



?>

<script type="text/javascript">

   var txt="<?php echo $text;?>";
var r = confirm(txt);
if (r == true) {
    redireccionar();
} else {
    redireccionar();
}
//alert("this is what went wrong");


    function redireccionar(){
  window.location="login.php";

}

</script>
