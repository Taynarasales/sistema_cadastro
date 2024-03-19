<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- inclusão do bootstrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro</title>
  </head>
  <body>
    <!-- inclusão da barrade navegação-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="?page=novo">Novo Usuário</a>
        <a class="nav-link" href="?page=listar">Listar Usuários</a>
      </div>
    </div>
  </div>
</nav>
 <!-- inclusão do configuração do conteudo do php  e estrutura de controle -->
<?php	
	include("config.php"); 
    switch(@$_REQUEST["page"]){ 
        case "novo":
            include("novo-usuario.php"); //inclusão  da pagina para cadastrar novo usúario.
        break;

        case "listar":
            include("listar-usuario.php");//inclusão  da pagina para listar novo usúario.
        break;
		
        case "salvar":
            include("salvar-usuario.php");//inclusão  da pagina para salvar  novo usuario.
        break;
        
        case "editar":
          include("editar-usuario.php");//inclusão  da pagina para editar  novo usuario.
      break;
        default:
            print "<h1>Bem vindos!</h1>";//mensagem para  de bem-vindo não home page 
    }

?>



    <script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

</html>