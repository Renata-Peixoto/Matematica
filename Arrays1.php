<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Calculadora de IMC</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
        body {
            background:
                radial-gradient(#f9b 2px, transparent 3px),
                radial-gradient(#f9b 2px, transparent 3px),
                #fee;
            background-position: 0 0, 20px 20px;
            background-size: 40px 40px;
        }

        form {
            background-color: #f9b;
            font-style: normal;
            font-size: large;

        }
        h1 {
			font-size: 20px;
            color:#f9b;
            text-shadow: -0.06em 0 0 red, 0.06em 0 0 cyan;
			font-size: 20px;
         
        }

        textarea {
            width: 474px;
            height: 120px;
            line-height: 20px;
        }
		input{
    font-size: 16px;
    background:palevioletred;
    max-width: 500px;
    margin: 0 auto;
    padding: 0 10px 10px 10px;
    }
	a{
		font-size: 20px;
		font-style:  italic;
		font-weight: bolder;
	}
    h4 {
			font-size: 20px;
            color:palevioletred;
          font-weight: bolder;
			font-size: 20px;
            text-align: center;
         
        }
        
        </style>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="http://localhost/2021/Atvidade%20de%20Recuper%c3%a3o/Inicio.php"><h1>Matemática</a></h1> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/2021/Atvidade%20de%20Recuper%c3%a3o/imc.php">Calcule o IMC </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/2021/Atvidade%20de%20Recuper%c3%a3o/Taboada.php">Taboada</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/2021/Atvidade%20de%20Recuper%c3%a3o/Calaculadora_switch.php">Calculadora</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="http://localhost/2021/Atvidade%20de%20Recuper%c3%a3o/Arrays1.php">Arrays</a>
      </li>
    </ul>
  </div>
</nav>
	
<?php 
    $cores = array("<h4>Azul","<h4>Amarelo","<h4>Vermelho","<h4>Rosa","<h4>Verde</h4>");
    foreach ($cores as $key => $value) { 
        echo "<h4>Minha cor no indice".$key." é </h4>".$value."<br/>";
    }
?>

</body>
</html>

</body>
</html>