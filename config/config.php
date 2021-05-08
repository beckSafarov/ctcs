<?php
  // identifying the root url
  $host = $_SERVER['HTTP_HOST'];
  $rootUrl = ($host === 'localhost:8080') ? 'http://localhost:8080/ctcs' : "http://$host";
  define('URLROOT', $rootUrl);

  // -- LINKS -- 
  define('HOME_PATH', URLROOT); 
  define('ABOUT_PATH', URLROOT.'/about.php'); 
  define('MEMBERS_PATH', URLROOT.'/#team-members'); 
  define('SERVICES_PATH', URLROOT.'/#services'); 
  define('CONTACT_PATH', URLROOT.'/contact.php'); 
  define('ACTIVITIES_PATH', URLROOT.'/activities.php'); 
  define('ZARUL_PATH', URLROOT.'/members.php?member=1'); 
  define('SUFRIL_PATH', URLROOT.'/members.php?member=2'); 
  define('ADIB_PATH', URLROOT.'/members.php?member=3'); 
  define('MANMEET_PATH', URLROOT.'/members.php?member=4'); 
  define('MAZIANI_PATH', URLROOT.'/members.php?member=5'); 
  define('AZLAN_PATH', URLROOT.'/members.php?member=6'); 


 