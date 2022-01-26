<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
	<title>Angular</title>
	<style>
		html,
    body {
      height: 100%;
    }

    body {
      display: -ms-flexbox;
      display: -webkit-box;
      display: flex;
      -ms-flex-align: center;
      -ms-flex-pack: center;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
    }
    .form-signin .checkbox {
      font-weight: 400;
    }
    .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
    }
    .form-signin .form-control:focus {
      z-index: 2;
    }
    .form-signin input#inputEmail, input#inputTelefone {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    .form-signin input#inputCPF {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    .form-signin input#inputNome {
      margin-bottom: -1px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
    }
	</style>
</head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body class="text-center"> 

<form method="POST" class="form-signin" ng-app="myApp" ng-controller="controlador1"> 
      <h1 class="h3 mb-3 font-weight-normal">Novo cliente</h1>
      <label for="inputNome" class="sr-only">Nome</label>
      <input type="text" name="nome" id="inputNome" class="form-control" placeholder="Nome do cliente" required ng-model="nome" autofocus> <!-- nome ->
      <label for="inputEmail" class="sr-only">E-mail</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="E-mail do cliente" > <!-- e-mail -->
	   <label for="inputTelefone" class="sr-only">Telefone</label>
      <input type="text" name="telefone" id="inputTelefone" class="form-control" placeholder="Telefone do cliente" required ui-br-phone-number > <!-- telefone -->
      <label for="inputCPF" class="sr-only">CPF</label>
      <input type="text" name="cpf" id="inputCPF" class="form-control" placeholder="CPF do cliente"> <!-- cpf -->
      <div class="checkbox mb-3">
        <p>
          Cliente será cadastrado.
        </p >
        
        <p><?php  if(isset($data['erro']) && $data['erro'] == true ) {echo '<b style="color: red">'.$data['mensagem'].'</b>';} else if (isset($data['mensagem'])) echo '<b style="color: green">'.$data['mensagem'].'</b>';?></p>
      </div> <!-- div checkbox mb-3 -->
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="sub" value="teste">Cadastrar</button> <!-- button -->
      <p class="mt-5 mb-3 text-muted">Ao finalizar cadastro, se desejar pode voltar clicando <a href="http://localhost/bcit-ci-CodeIgniter-b73eb19/">aqui</a>.</p> <!-- p -->
    </form> <!-- form -->

</body> <!-- body -->
</html> <!-- html -->