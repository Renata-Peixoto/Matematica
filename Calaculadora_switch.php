<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Calaculadora SWITCH</title>
</head>
<style type = "text/css">
      style1 {font-family: algerian; font-size: 24px; font-weight: bold; color: #000000;}
      body{
    background:
    radial-gradient(#f9b 2px, transparent 3px),
    radial-gradient(#f9b 2px, transparent 3px),
    #fee;
    background-position: 0 0, 20px 20px;
    background-size: 40px 40px;
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
        a{
		font-size: 20px;
		font-style:  italic;
		font-weight: bolder;
	}

    </style>
  </head>
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
  <body background>
    <table width="500" height="100" align="center" bgcolor="#DDA0DD"  border="4" cellpadding="10" cellspacing="0" bordercolor="#0000">
      <tr>
        <td>
            <br><div align="center"><span class="style1"><h1> Calculadora </h1></span> <br></div><br>
<body>

    <div class="container">
        <h1 class="text-center">Insira os números que deseja Calcular</h1>
        <div class="mt-5">
            <form method="POST" action="Resultado_Calcular.php" style="font-weight: bold;">
            <table width="500" height="100" align="center" bgcolor="#DDA0DD"  border="4" cellpadding="10" cellspacing="0" bordercolor="#0000">
                <div class="form-group">
                Valor 1:<input type="number" class="form-control" name="num1" placeholder="Digite o primeiro número" required>
                Valor 2:<input type="number" class="form-control" name="num2" placeholder="Digite o segundo número" required>
                </div>
                <br>
                <select name="operacao" class="form-control">
                    <option value=""></option>
                    <option value="soma">Soma</option>
                    <option value="subtracao">Subtração</option>
                    <option value="mutiplicacao">Mutiplicação</option>
                    <option value="divisao">Divisão</option>
                </select>
                <br/><br/>
                <br>
                <button class="btn btn-success btn-block" value="calcular">Calcular</butto>
                 
            </form>
        </div>
    </div>
    </div>
</body>

</html>