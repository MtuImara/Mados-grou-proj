<?php

	function ajouterUser($num_cni,$nom_prenom,$login,$password,$fonction,$adresse)
	{
		$con=connection();

		$query = $con->prepare("INSERT INTO utilisateur(num_cni,nom_prenom,login,password,fonction,adresse) 
	              VALUES(:num_cni,:nom_prenom,:login,:password,:fonction,:adresse)");
		$res = $query -> execute(array('num_cni'=>$_POST['num_cni'],'nom_prenom'=>$_POST['nom_prenom'],'login'=>$_POST['login'],'password'=>$_POST['password'],'fonction'=>'user','adresse'=>$_POST['adresse']))

	    or die(print_r($query->errorInfo()));

	    return $res;
	}

?>