<?php

$siteName = $_GET['siteName'];
$origLink = $_GET['origLink'];

// Activetuts is still using the old Flashtuts RSS path.
if ( $siteName === 'activetuts' ) $siteName = 'flashtuts';
else if ( $siteName === 'webdesigntuts' ) $siteName = 'webdesigntutsplus';

// YQL query (SELECT * from feed ... ) // Split for readability
$path = "http://query.yahooapis.com/v1/public/yql?q=";
$path .= urlencode("SELECT * FROM feed WHERE url='http://feeds.feedburner.com/$siteName' AND guid='$origLink'");
$path .= "&format=json";
$feed = json_decode(file_get_contents($path));
$feed = $feed->query->results->item;

// Really sloppy. Fix this me. Lazy right now.
if ( $siteName === 'flashtuts' ) $siteName = 'activetuts';
else if ( $siteName === 'webdesigntutsplus' ) $siteName = 'webdesigntuts';

include('views/article.tmpl.php');
