<?php
date_default_timezone_set('America/Chicago');
include('config/config.php');
include('include/db_query.php'); //this should happen right after config so other functions have access to the database
include('include/header.php');
include('include/Faq.php');
include('include/Announcements.php');
include('include/News.php');
include('include/Theatre.php');
include('include/Work.php');
include('include/form.php');
