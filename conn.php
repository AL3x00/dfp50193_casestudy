<?php
$host = 'localhost';
$user = 'root';
$pswd = '';
$dbname = 'case_study';

$conn = new mysqli($host,$user,$pswd,$dbname);
session_start();