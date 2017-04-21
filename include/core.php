<?php
$rootdir = realpath(__DIR__);
include ($rootdir . '/config.php');
include ($rootdir . '/version.php');

/* Returns whether the given string starts with the given substring. */
function startswith($string, $substring) {
    return strncmp($string, $substring, strlen($substring)) === 0;
}

$addr = $_SERVER['REQUEST_URI'];

?>
<!DOCTYPE HTML>
<html>
<head>
<?php include ($rootdir . '/head.php'); ?>
</head>

<body>
<?php /* Basic version using a "nav" class */ ?>
<div class="nav">
<ul>
<?php
    foreach ($knownPages as $page => $title) {
        if ($addr == $page) {
            echo '<li class="nav-active"><a href="">' . $title . "</a></li>\n";
        } elseif (!in_array($page, $hiddenPages)) {
            // Don't show hidden pages in the navbar, unless we're on it already.
            echo '<li><a href="' . $page . '">' . $title . "</a></li>\n";
        }
    }
?>
</ul>
</div>

<?php // Extended version using Bootstrap
/*
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><?=$siteName?></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                    // Mark the page as active if the address matches, and format the pages accordingly.
                    foreach ($knownPages as $page => $title) {
                        if ($addr == $page) {
                            echo '<li class="active"><a href="">' . $title . '</a></li>';
                        // Don't show hidden pages in the navbar, unless we're on it already.
                        } elseif (!in_array($page, $hiddenPages)) {
                            echo '<li><a href="' . $page . '">' . $title . '</a></li>';
                        }
                    }
                    ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</div>
*/ ?>
