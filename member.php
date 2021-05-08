<?php 
$localstyle='member.css';
$localscript = 'member.js';
require 'config/config.php'; 

// getting members data from json file
$rawData = file_get_contents("database/members.json");
$members = json_decode($rawData, true);


function sendHome()
{
   $root = URLROOT; 
   header("Location: $root#team-members");
   exit();
}

// extracting the member id from the query string
$urlQuery = $_SERVER['QUERY_STRING'];
if($urlQuery){
   $urlQuery = explode('=', $urlQuery);
   $memberId = $urlQuery[1];
   if($memberId > 6 || $memberId < 1){
      sendHome();
   }
}else{
   sendHome();
}

// looking for the member with the queried id
foreach($members as $currMember){
  if($currMember['id']==$memberId){
    $member = $currMember;
  }
}

// getting the short name of the member
$nameValues = explode(' ', $member['name']);
$nameValues[1] = rtrim($nameValues[1], ',');
$shortName = $nameValues[0].' '.$nameValues[1]; 
$title = "$shortName | CTCS"; //title of the current page

$qualifications = $member['qualifications'];
$specializations = $member['specializations']; 
$researchInterests=$member['researchInterests'];


// load the view
require 'views/memberView.php';