<?php require_once('Connections/conn_vote.php'); ?>
<?php require_once('functions.php'); ?>

<?php

mysql_select_db($database_conn_vote, $conn_vote);
$query_rs_vote = "SELECT * FROM poll";
$rs_vote = mysql_query($query_rs_vote, $conn_vote) or die(mysql_error());
$row_rs_vote = mysql_fetch_assoc($rs_vote);
$totalRows_rs_vote = mysql_num_rows($rs_vote);

$resultQuestion1 = mysql_query("SELECT * FROM poll WHERE question='levski'");
$num_rowsQuestion1 = mysql_num_rows($resultQuestion1);

$resultQuestion2 = mysql_query("SELECT * FROM poll WHERE question='cska'");
$num_rowsQuestion2 = mysql_num_rows($resultQuestion2);

$resultQuestion3 = mysql_query("SELECT * FROM poll WHERE question='plaza'");
$num_rowsQuestion3 = mysql_num_rows($resultQuestion3);


$percentQuestion1 = ($num_rowsQuestion1 / $totalRows_rs_vote)*100;
$percentQuestion2 = ($num_rowsQuestion2 / $totalRows_rs_vote)*100;
$percentQuestion3 = ($num_rowsQuestion3 / $totalRows_rs_vote)*100;

?>


<?php require_once('header.php'); ?>

<?php require_once('results-fieldset.php'); ?>

<?php require_once('footer.php'); ?>

<?php
mysql_free_result($rs_vote);
?>