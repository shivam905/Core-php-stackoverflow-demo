<?php
$conn = mysqli_connect("localhost","root","root","pdata");
if (!$conn)
{
	die("could not connect".mysqli_connect_error());
}