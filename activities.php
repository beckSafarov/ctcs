<?php 
$localstyle='activities.css';
$localscript = 'activities.js';
$title = 'Activities | CTCS';
require 'config/config.php';

$img = ['dog.jpg', 'public-speaking-1.jpg', 'public-speaking-2.jpg'];

$imgDescriptions = ['Dog Reading', 'Awesome Presentation', 'Boring Presentation'];

$activityBody = [
   'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores minima, alias harum laborum ipsum quasi nisi, quisquam esse amet reiciendis aspernatur corrupti quis odio minus dolorum! Pariatur, architecto temporibus asperiores qui, saepe earum a sed libero nam laboriosam corrupti aut odio fugiat quos porro animi quibusdam deleniti consectetur similique corporis.',
   'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores minima, alias harum laborum ipsum quasi nisi, quisquam esse amet reiciendis aspernatur corrupti quis odio minus dolorum! Pariatur, architecto temporibus asperiores qui, saepe earum a sed libero nam laboriosam corrupti aut odio fugiat quos porro animi quibusdam deleniti consectetur similique corporis.',
   'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores minima, alias harum laborum ipsum quasi nisi, quisquam esse amet reiciendis aspernatur corrupti quis odio minus dolorum! Pariatur, architecto temporibus asperiores qui, saepe earum a sed libero nam laboriosam corrupti aut odio fugiat quos porro animi quibusdam deleniti consectetur similique corporis.'
];


require 'views/activitiesView.php';