<?php

$connect = new mysqli("localhost", "root", "", "iwpproject");
if($connect -> connect_errno)
{
	echo "Could not connect db";
}
?>