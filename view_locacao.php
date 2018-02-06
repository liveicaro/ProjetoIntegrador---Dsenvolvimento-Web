<?php
	
	require 'dao_locacao.php';		
	require_once 'dao_funcionario.php';
	require_once 'dao_cargo.php';
	require_once 'dao_veiculo.php';
	require_once 'dao_cliente.php';
		
	
	$daoVeiculo = new DAOVeiculo();
	$listaVeiculos = $daoVeiculo->listarVeiculos();

	$daoFuncionario = new DAOFuncionario();
	$listaFuncionarios = $daoFuncionario->listarFuncionarios();
	
	$daoCargo = new DAOCargo();
	$listaCargos = $daoCargo->listarCargos();
	
	$daoLocacao = new DAOLocacao();
	$listaLocacao = $daoLocacao->listarLocacao();
	
	$daoCliente = new DAOCliente();
	$listaClientes = $daoCliente->listarClientes();
	
	
	
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
            <li><a href="view_veiculo.php">Veículos</a></li>
        	<li class="active"><a href="view_locacao.php">Locações</a></li>
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
	
	<form action="incluir_locacao.php" method="post">
		<fieldset>
	  		<legend>Nova Locação</legend>
			
			<label>Data Locação</label>
	  		<div class="form-group">
	    			<input type="date" class="form-control" id="data" name="data" placeholder="Data Locação">
	  		</div>
			<label>Data Devolução</label>
	  		<div class="form-group">
	    			<input type="date" class="form-control" id="datadevolucao" name="datadevolucao" placeholder="Data Devolução">  
	  		</div>
			
			<div class="form-group">
				<label for="status">Status</label>
				<select class="form-control" id="statusveiculo">
				  <option></option>
				  <option>Aberta</option>
				  <option>Fechada</option>
				  <option>Cancelada</option>		  
				  
				</select>
			  </div>		
			
	  		
			<div class="form-group">	
		  			<label>Funcionário</label>
				    <select name="codigoFuncionario">
				    	<?php
				    		while ($objetoFuncionario = array_shift($listaFuncionarios)) {
				    	?>
						  <option value="<?php echo $objetoFuncionario->getFuncionario(); ?>">  <?php echo $objetoFuncionario->getNome(); ?>  </option>
						 <?php
						}
						 ?>
					</select>
				</div>
			
			
			<div class="form-group">	
		  			<label>Cliente</label>
				    <select name="aaa">
				    	<?php
				    		while ($objetoCliente = array_shift($listaClientes)) {
				    	?>
						  <option value="<?php echo $objetoCliente->getCodigo(); ?>">  <?php echo $objetoCliente->getNome(); ?>  </option>
						 <?php
						}
						 ?>
					</select>
				</div>
			
			
			
			<div class="form-group">	
		  			<label>Veículo</label>
				    <select name="ttt">
				    	<?php
				    		while ($objetoVeiculo = array_shift($listaVeiculos)) {
				    	?>
						  <option value="<?php echo $objetoVeiculo->getCodigo(); ?>">  <?php echo $objetoVeiculo->getModelo(); ?>  </option>
						 <?php
						}
						 ?>
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
    		<h2 class="panel-title">Lista de Locações</h2>
 	 	</div><!-- fim .panel-heading -->
		
		<div class="panel-body">  
  			<table class="table table-hover">
  				<tr>
  						<th>Código</th>
  						<th>Data Locação</th>
  						<th>Data Devolução</th>
  						<th>Status</th>
  						<th>Funcionário</th>
						<th>Cliente</th>
						<th>Veículo</th>
  						<th></th>
  				</tr>
  				<?php
  					while ($objetoLocacao = array_shift($listaLocacao)) {
  				?>	
    				<tr>
    					<td class="col-md-1"><?php echo $objetoLocacao->getCodigo(); ?></td>
    					<td class="col-md-3"><?php echo $objetoLocacao->getData(); ?></td>
						<td class="col-md-3"><?php echo $objetoLocacao->getDatadevolucao(); ?></td>		
						<td class="col-md-3"><?php echo $objetoLocacao->getStatus(); ?></td>
						<td class="col-md-3"><?php echo $objetoLocacao->getFuncionario(); ?></td>
						<td class="col-md-3"><?php echo $objetoLocacao->getCliente(); ?></td>						
						<td class="col-md-1"><?php echo $objetoLocacao->getVeiculo()->getModelo();?></td>
						
						
						
						
						
						
    					
    					<td class="col-md-1">
    						<a class="btn btn-danger" href="excluir_locacao.php?codigo=<?= $objetoLocacao->getCodigo(); ?>" role="button">Excluir</a>  								
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