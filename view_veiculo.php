<?php
	
	require 'dao_veiculo.php';		
	
	$daoVeiculo = new DAOVeiculo();
	$listaVeiculos = $daoVeiculo->listarVeiculos();
	
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Locadora de Veículos</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>
  
  <body>
 	<nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          	<a class="navbar-brand" href="index.php">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
          <ul class="nav navbar-nav">
            <li class="active"><a href="view_veiculo.php">Veículos</a></li>
        	<li><a href="view_locacao.php">Locações</a></li>
            <li><a href="view_cliente.php">Clientes</a></li>
            <li><a href="view_funcionario.php">Funcionários</a></li>
            <li><a href="view_cargo.php">Cargos</a></li>
            <li><a href="view_marcellolima.php">Marcello Lima</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>
    
<div class="jumbotron" style="background-image:url('img1.jpg'); color: #FFFFFF; background-size: 100% 100%;">	
  	<div class="container">   		
		<h1>Locadora de Veículos</h1>
		<h2>AQUILOCA</h2>
	</div>
</div> 


<div class="container">
	
	<form action="incluir_veiculo.php" method="post">
		<fieldset>
	  		<legend>Novo Veículo</legend>
	
	  		<div class="form-group">
	    			<input type="text" class="form-control" id="model" name="modelo" placeholder="Modelo">
	  		</div>
	
	  		<div class="form-group">
	    			<input type="text" class="form-control" id="cor" name="cor" placeholder="Cor">  
	  		</div>
			
			<div class="form-group">
	    			<input type="text" class="form-control" id="ano" name="ano" placeholder="Ano">  
	  		</div>
	  		
			<div class="form-group">
	    			<input type="text" class="form-control" id="placa" name="placa" placeholder="Placa">  
	  		</div>
			
			<div class="form-group">
				<label for="tipocarro">Tipo</label>
				<select class="form-control" id="tipoveiculo">
				  <option></option>
				  <option>Hach Médio</option>
				  <option>Hach Compacto</option>
				  <option>Sedam</option>
				  <option>SUV</option>
				  <option>Motocicleta</option>
				</select>
			  </div>
			
	  		
			<div class="form-group">
				<label for="statuscarro">Status</label>
				<select class="form-control" id="statusveiculo">
				  <option></option>
				  <option>Livre</option>
				  <option>Alugado</option>
				  <option>Desativado</option>
				  <option>Manutenção</option>				  
				</select>
			  </div>
			
			
	  
	  		<button type="submit" class="btn btn-primary">
	  				<span class="glyphicon glyphicon-thumbs-up"></span>
	  				Cadastrar
			</button>
		</fieldset>  
	</form> 			
</div> <!-- fim .container 1 --> 

<div class="container">
 	<br /> <br /> 
</div> <!-- fim .container 2 -->
	
	
<div class="container">
  <div class="panel panel-default">
  		<div class="panel-heading">
    		<h2 class="panel-title">Lista de Veiculos</h2>
 	 	</div><!-- fim .panel-heading -->
		
		<div class="panel-body">  
  			<table class="table table-hover">
  				<tr>
  						<th>Código</th>
  						<th>Modelo</th>
  						<th>Cor</th>
  						<th>Ano</th>
  						<th>Placa</th>
						<th>Tipo</th>
						<th>Status</th>
  						<th></th>
  				</tr>
  				<?php
  					while ($objetoVeiculo = array_shift($listaVeiculos)) {
  				?>	
    				<tr>
    					<td class="col-md-1"><?php echo $objetoVeiculo->getCodigo(); ?></td>
    					<td class="col-md-3"><?php echo $objetoVeiculo->getModelo(); ?></td>						
						<td class="col-md-3"><?php echo $objetoVeiculo->getCor(); ?></td>
						<td class="col-md-3"><?php echo $objetoVeiculo->getAno(); ?></td>
						<td class="col-md-3"><?php echo $objetoVeiculo->getPlaca(); ?></td>
						<td class="col-md-3"><?php echo $objetoVeiculo->getTipo(); ?></td>
						<td class="col-md-3"><?php echo $objetoVeiculo->getStatus(); ?></td>
						
						
						
						
						
    					
    					<td class="col-md-1">
    						<a class="btn btn-danger" href="excluir_veiculo.php?codigo=<?= $objetoVeiculo->getCodigo(); ?>" role="button">Excluir</a>  								
    					</td>
    				</tr>
    			<?php
					}
    			?>
    				
    			</table>
    			
 		</div><!-- fim .panel-body -->
	</div><!-- fim .panel -->
</div><!-- fim .container 3 -->

    </body>
</html>