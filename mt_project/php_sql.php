<?php

$con = mysqli_connect("localhost","root","");

mysqli_query($con, "CREATE DATABASE orbital");
include("connection.php");

mysqli_query($con, "CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
)");


mysqli_query($con, "CREATE TABLE IF NOT EXISTS contact_us (
    id INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    user_email VARCHAR(255) NOT NULL,
    msg VARCHAR(255) NOT NULL
)");






?>