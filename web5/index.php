<?php
 session_start();
 //session_unset();
 // use of isset function to check if session is variable is already or not
 // $num_visit incremented each time the page is visited during session
 // $_SESSION variables that can be accessed during session.
?>

			<h1>Hello</h1>
			<p>You have visited this page <?= $_SESSION['$num_visits'] ?> times</p>
			<p><a href="?reset=true">Reset</a></p>

<?php
$_SESSION['$num_visits']+=1;
if (isset($_SESSION['$num_visits'])){
	if ($_SESSION['$num_visits']==6){
	echo "Thank you for visiting the page a lot.";}
	if ($_SESSION['$num_visits']==11){
	header("Location: congratulations.php", TRUE, 301);
	exit();}
}
?>