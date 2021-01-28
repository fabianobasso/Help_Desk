<?php

session_start();
// para destruir uma sessão
session_destroy();
header('Location: ../index.php');

