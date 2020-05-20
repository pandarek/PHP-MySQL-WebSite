<?php
require 'config.php';

$action = isset($_GET['action']) ? $_GET['action'] : "";
switch ($action) {
    case 'viewArticle':
        viewArticle();
        break;
    default:
        homepage();
}

function viewArticle()
{
    if (!isset($_GET["articleId"]) || !$_GET["articleId"]) {
        homepage();
        return;
    }
    $results = array();
    $results['article'] = Articles::getById((int)$_GET["articleId"]);
    $results['pageTitle'] = $results['article']->title . " | " . HOME_PAGE_TITLE;

    require(TEMPLATE_PATH . "/viewArticle.php");
}

function homepage()
{
    $results = array();
    $data = Articles::getList(HOMEPAGE_NUM_ARTICLES);

    $results['articles'] = $data['results'];
    $results['totalRows'] = $data['totalRows'];
    $results['pageTitle'] = HOME_PAGE_TITLE;
    require(TEMPLATE_PATH . "/homepage.php");
}