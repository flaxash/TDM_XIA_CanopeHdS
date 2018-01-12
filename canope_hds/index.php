<?php 
	session_start();
	if ($_SESSION['origine']=='enthds') {
		echo "<script>window.location.href='https://www.reseau-canope.fr/atelier-hauts-de-seine/'</script>";
	} else {
		echo "Autorisation : refus d'authentification";
	};
?>
