<?php
/**
 * Lightweight bootstrap to preview the theme without the full WordPress core.
 */

declare(strict_types=1);

$themeRoot = __DIR__;
$stylesheet = file_get_contents($themeRoot . '/style.css');
$stylesheet = preg_replace('~/\*.*?\*/~s', '', (string) $stylesheet);
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MV Simple Theme Preview</title>
    <style><?php echo $stylesheet; ?></style>
</head>
<body>
<div class="site">
    <header class="site-header">
        <h1 class="site-title">MV Simple Theme</h1>
        <p class="site-description">A quick preview without WordPress.</p>
    </header>
    <nav class="site-navigation">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <section class="hero">
        <h2 class="hero__title">Beautiful WordPress Experiences</h2>
        <p class="hero__subtitle">Launch marketing sites, publish content, and tell your story with a clean, modern layout that focuses on readability.</p>
        <a class="hero__cta" href="#primary-content">Explore the site</a>
    </section>
    <main id="primary-content" class="content-area">
        <article class="post-card">
            <header class="post-card__header">
                <div class="post-card__meta">
                    <span class="post-card__date">Today</span>
                    <span class="post-card__categories">News</span>
                </div>
                <h2 class="post-card__title"><a href="#">Designing delightful customer journeys</a></h2>
            </header>
            <div class="post-card__content">
                <div class="post-card__excerpt">
                    <p>Use this preview to get a feel for the MV Simple theme without a full WordPress stack. Replace it with real content once WordPress core is installed.</p>
                </div>
            </div>
        </article>
    </main>
    <footer class="site-footer">
        <p>&copy; <?php echo date('Y'); ?> MV Simple Theme.</p>
        <p>Crafted with WordPress and the MV Simple theme.</p>
    </footer>
</div>
</body>
</html>
