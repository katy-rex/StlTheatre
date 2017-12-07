<?php
date_default_timezone_set('America/Chicago');
include('config/config.php');
include('include/db_query.php'); //this should happen right after config so other functions have access to the database
include('include/header.php');
include('include/footer.php');
include('include/FAQFunction.php');
include('include/AnnouncementsFunction.php');
include('include/NewsFunction.php');
include('include/TheatreListFunction.php');
include('include/WorkFunction.php');
