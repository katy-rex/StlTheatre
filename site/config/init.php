<?php
date_default_timezone_set('America/Chicago');
include('config/config.php');
include('include/db_query.php'); //this should happen right after config so other functions have access to the database
include('include/header.php');
include('include/FaqFunctions.php');
include('include/AnnouncementsFunctions.php');
include('include/NewsFunctions.php');
include('include/TheatreListFunctions.php');
include('include/WorkFunctions.php');
//global $Faq;
