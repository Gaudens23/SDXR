<?php
    $prix = $_POST['prix'];
    $qte  = $_POST['qte'];
    $SDP  = $_POST['SDP'];

    // Connection 

    $conn = new mysqli("127.0.0.1 via TCP/IP", "root@localhost","","test");
    if($conn->connect_error)
    {
    	die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
    	$stmt = $conn->prepare(" insert into registraire (prix, qte, SDP) values(?,?,?)");
    	$stmt ->blind_param("iis",$prix,$qte,$SDP);
    	$stmt ->execute();
    	echo "Enregistrement avec succès";
    	$stmt ->close();
    	$conn->close();
    }	
?>