<?php
// Sets the page title to "Page Title - Site Name"
$pageTitle = trim($addr, "/");
if ($pageTitle === "") {
    $pageTitle = "/";
}
$pageTitle = $knownPages[$addr];
 ?>
<title><?=$pageTitle?> - <?=$siteName?></title>

<!-- CSS styles -->
<link href="/site.css" rel="stylesheet">
<?php /* These are for a bootstrap-style navbar
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
*/ ?>

<!-- Scale to mobile screens -->
<meta name=viewport content="width=device-width, initial-scale=1">
