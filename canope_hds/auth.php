<?php 
session_start();
if ($_GET['user']=='enc92') {
	$_SESSION['origine'] = 'enthds';
} else {
	$_SESSION['origine'] = '';	
}
//echo "cookie : ".$_SESSION['origine']." ...";
echo "redirection en cours ...";
?>
<script>
	window.location.href="index.php";
</script>