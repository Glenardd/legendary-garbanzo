<?php
 session_start();
 //session_unset
 // use of isset function to check if session is variable is already or not
 // $num_visit incremented each time the page is visited during session
 // $_SESSION variables that can be accesed during session.
 		

		 if(isset( $_SESSION['$num_visits']) ){
		  		 $_SESSION['$num_visits'] +=1;
		   }else {
		      $_SESSION['$num_visits'] == 5;
		      echo " <h2> Wow </h2> Thank you for visiting the page a lot. ";
		   		
		   }
?>
			<h1>Hello</h1>
			<p>You have visited this page <?= $_SESSION['$num_visits'] ?> times</p>
			<p><a href="?reset=true">Reset</a></p>
