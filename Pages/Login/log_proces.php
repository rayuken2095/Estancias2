<?php
//header("location:index.php");

session_start();
//echo "hola";
$usuario=$_POST['email'];
$password=$_POST['pass'];
//echo $usuario;
include("conexion.php");
//$conexion = new mysqli("localhost","root","admin","shareu");
//echo "nombre"."<br>".$usuario."<br>";
//echo "pass ".$password;
$text;
$proceso=("SELECT ID_usuario,nombre,num_seguidores from usuarios WHERE correo='$usuario' AND password='$password'" );
$res= $conexion->query($proceso);



	if($row=$res->fetch_array()){
		//echo "entre";
		ob_start();

		//echo $row[0] ;
		//variables que se necesitan en SESSION
		$_SESSION['id']=$row[0];
		$_SESSION['nom']=$row[1];
		$_SESSION['ns']=$row[2];
		$_SESSION['on'] = true;
		$_SESSION['id_externa']=0;
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
			$validacion = " SELECT correo FROM usuarios WHERE correo='$usuario' ";

        $resultado = $link->query($validacion);

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