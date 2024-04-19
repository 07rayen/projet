<?php

include 'controller/evaluationsC.php';
session_start();
$errorMessage = "";
$successMessage = "";
$evaluationC = new evaluationsC();
$evaluationC->SupprimerEvaluation($_GET["id"]);
header("Location:affichevaluations.php");
