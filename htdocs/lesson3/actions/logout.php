<?php
session_start();
session_destroy();
header('Location: ./actions/index.php');