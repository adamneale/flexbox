<?php

const TEMPLATES_DIR = 'templates/';

$pages = array(
    'index',
    'flex-basics',
    'flex-basics-2',
    'flex-basics-3',
    'flex-basics-4',
);

$thisPage = isset($_GET['page']) ? $_GET['page'] : 0;

$prevPage = isset($pages[$thisPage-1]) ? $thisPage-1 : null;
$nextPage = isset($pages[$thisPage+1]) ? $thisPage+1 : null;

include TEMPLATES_DIR . 'header.php';
include TEMPLATES_DIR . $pages[$thisPage] . '.php';
include TEMPLATES_DIR . 'footer.php';