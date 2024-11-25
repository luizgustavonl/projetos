<!DOCTYPE html>
<html lang="pt-br">
<?php 

include "validacao.php";

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Sistema </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./recursos/estilo.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />



</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary barranav">
    <a class="navbar-brand" href="#"> <i class="fa-solid fa-school"></i> Sistema Senac</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
      aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Ação</a>
            <a class="dropdown-item" href="#">Outra ação</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Algo mais aqui</a>
          </div>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Pesquisar</button>
        <a href="./sair.php" class="btn btn-outline-light ml-2"> <i class="fa-solid fa-right-from-bracket"></i> </a>
      </form>
    </div>
  </nav>


  <div class="container-fluid">

    <div class="row">
      <div class="col-md-3 menu">
        <ul class="menu">
          <li style="color:white"> Bem vindo(a) <?php echo $_SESSION['usuario'] ?> </li>

          <li> <a href="./principal.php" class="menu-item"> Usuário </a> </li>
          <li> <a href="./cidade.php" class="menu-item"> Cidade </a> </li>
          <li> <a href="./funcionario.php" class="menu-item"> Funcionario </a> </li>
          <li> <a href="./sair.php" class="menu-item"> Sair </a> </li>
        </ul>
      </div>

      <div class="col-md-9">

        <div class="row">

          <div class="col-md-4 card">
            Cadastro
            <form action="./usuario/inserir.php" method="post">

              <div class="form-group">
                <label>ID: </label>
                <input type="text" name="id" class="form-control" placeholder="Seu id">
              </div>

              <div class="form-group">
                <label>Nome: </label>
                <input type="text" name="nome" class="form-control" placeholder="Seu Nome">
              </div>
              
              <div class="form-group">
                <label>CPF: </label>
                <input type="text" name="cpf" class="form-control cpf" placeholder="Seu CPF">
              </div>

              <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Senha">
              </div>

              <button type="submit" class="btn btn-primary"> Logar </button>
            </form>

          </div>

          <div class="col-md-7 card"> Listagem

            <table class="table table-striped table-bordered " id="tabela">
              <thead >
                <tr >
                  <th scope="col"> id</th>
                  <th scope="col"> nome </th>
                  <th scope="col"> cpf</th>
                  <th scope="col"> opções </th>
                </tr>
              </thead>
              <tbody >
                <tr >
                  <th scope="row"> 1 </th>
                  <td> Mark Zuckerberg </td>
                  <td> 123.123.123-12 </td>
                  <td> 
                    <a href=""> <i class="fa-solid fa-pen-to-square mr-3"></i> </a>
                    <a href=""> <i class="fa-solid fa-trash-can" style="color:red"></i> </a>
                  </td>
                </tr>
             
                
              </tbody>
            </table>
          </div>

        </div>

      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <script src="./recursos/script.js"></script>
</body>

</html>