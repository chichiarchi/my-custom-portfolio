<?php 
include_once __DIR__ . '/visitor_logger.php';
$requestUri = $_SERVER['REQUEST_URI'];
// Improved page detection that handles both clean URLs and .php extensions
$isResume = (strpos($requestUri, '/resume') !== false);
$currentPage = $isResume ? 'resume.php' : 'index.php';
$isIndex = ($currentPage === 'index.php');
$base = $isIndex ? '' : './';
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Portfolio | Logic & Design</title>
    <!-- Fallback fonts if user doesn't have them -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;700&family=Inter:wght@300;400;600;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?= $base ?>css/style.css">
    <link rel="icon" type="image/svg+xml" href="<?= $base ?>favicon.svg">
</head>

<body>


    <header>
        <nav>
            <a href="./" class="logo" style="text-decoration:none">PORT<span>FOLIO</span></a>

            <div class="nav-controls">
                <button id="theme-toggle">LIGHT MODE</button>

                <!-- Mobile Menu Toggle -->
                <button id="mobile-menu-toggle" aria-label="Toggle Menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>

            <ul class="nav-links">
                <li><a href="<?= $base ?>#home">Home</a></li>
                <li><a href="<?= $base ?>#brand">About</a></li>
                <li><a href="<?= $base ?>#projects">Projects</a></li>
                <li><a href="<?= $base ?>#skills">Skills</a></li>
                <li><a href="<?= $base ?>#contact">Contact</a></li>
                <li><a href="<?= $base ?>resume"
                        class="nav-resume-cta<?= $currentPage === 'resume.php' ? ' active' : '' ?>">RESUME</a></li>
            </ul>
        </nav>
    </header>