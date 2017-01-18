<?php
session_start();
if(session_destroy()){ // DIznīcina visas sesijas
header("Location: index.php"); 
}
?>