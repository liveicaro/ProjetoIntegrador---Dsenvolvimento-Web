<?php
   require_once 'dao_marcellolima.php';
   
   $objetoMarcellolima = new Marcellolima();
   $objetoMarcellolima->setPrimeironome($_REQUEST['primeironome']);
   $objetoMarcellolima->setUltimonome($_REQUEST['ultimonome']);
   
   
   $dao = new DAOMarcellolima();
   $dao->cadastrarMarcellolima($objetoMarcellolima); 
 	
	header('Location: view_marcellolima.php');
	exit;
?>