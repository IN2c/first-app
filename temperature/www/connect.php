<?php
  //Variablen f�r DB-Verbindung
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Erstellt Verbindung
  $conn = mysqli_connect($servername, $username, $password);

  // �berpr�ft ob Verbidnung vorhanden ist, wenn nicht: Abbruch
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Erstellt DB mit UTF8 Codierung
  $sql = 'CREATE DATABASE IF NOT EXISTS temperature CHARACTER SET utf8 COLLATE utf8_general_ci';
  $result = mysqli_query($conn, $sql)
    or die("Failed to create database: " . mysql_error());

  //link f�r connection
  $db_link = mysqli_connect($servername, $username, $password, "temperature");

  //create table user if not exists
  $sql = 'CREATE TABLE IF NOT EXISTS eintrag(
  ID int NOT NULL AUTO_INCREMENT,
  Temperatur double NOT NULL,
  Date varchar(50) NOT NULL,
  PRIMARY KEY (ID)
  )';

  mysqli_query($db_link, $sql);
?>
