<?php 
$localstyle='about.css';
$title = 'About us';
require 'config/config.php';



$dummyText = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, consequuntur repellendus. Expedita, temporibus excepturi. Hic numquam optio cum possimus omnis perferendis a. Quasi, laborum? Cupiditate possimus vero eveniet pariatur provident voluptate fugit. Inventore, iusto mollitia quasi deserunt quia dignissimos, officiis cumque aperiam ipsa, natus tenetur asperiores velit magni a nihil!';

$projectNames = ['Project 1', 'Project 2', 'Project 3'];

$projectDescriptions = ['Project 1 description', 'Project 2 description', 'Project 3 description'];

$images = ['p5.jpg', 'p1.jpg', 'p2.jpg'];


// load the view
require 'views/aboutView.php';