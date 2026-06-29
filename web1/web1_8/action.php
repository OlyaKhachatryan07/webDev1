<?php
echo '<pre>';
var_dump($_POST);
echo '</pre';

if (!empty($_POST['fname'])) {
	echo "First name is Correct <br>";
} else {
	echo 'First name is Not Correct <br>';
}

if (!empty($_POST['lname'])) {
	echo "Last name is Correct <br>";
} else {
	echo 'Last name is Not Correct <br>';
}

if (!empty($_POST['email'])) {
	echo "email is Correct <br>";
} else {
	echo 'email is Not Correct <br>';
}

if (!empty($_POST['pass'])) {
	echo "Password is Correct <br>";
} else {
	echo 'Password is Not Correct <br>';
}