<?php
session_start();
if(session_destroy()) // iznīcina visas sesijas
{
header("Location: index.php"); // atgriežas uz mājas lapu
}