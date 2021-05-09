<?php
session_start();
if ( !isset($_SESSION['log_in'])) {
    header('location: index.php');
}