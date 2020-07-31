<?php

function getMenuHTML()
{
    $pages = implode(" ", getPages());
    $menuPlain = file_get_contents(__DIR__ . '/../pages/menu.html');

    return str_replace("{{MENU_ITEMS}}", $pages, $menuPlain);
}

function getPages()
{
    $files = [];
    foreach (glob(__DIR__ . '/../pages/page_*.html') as $file) {
        $files[] = createPageHTML($file);
    }
    return $files;
}

function getBlogPages()
{
    $files = [];
    foreach (glob(__DIR__ . '/../pages/blog_*.html') as $file) {
        $files[] = createBlogHTML($file);
    }
    return $files;
}

function createBlogHTML($page)
{
    $parts = explode("/", $page);
    $last = $parts[count($parts) - 1];
    $name = substr(substr($last, 5), 0, ((int)strlen($last)) - 10);
    $url = "?page=" . $last;
    return "<li style='display: block'><a href='{$url}'><label><button type='submit' class='primary'>{$name}</button></label></a></li>";
}

function createPageHTML($page)
{
    $parts = explode("/", $page);
    $last = $parts[count($parts) - 1];
    $name = substr(substr($last, 5), 0, ((int)strlen($last)) - 10);
    $url = "?page=" . $last;
    return "<li style='display: inline-block'><a href='{$url}'><label><button type='submit' class='primary'>{$name}</button></label></a></li>";
}

function getContentHTML()
{
    $page = isset($_GET["page"]) ? $_GET["page"] : "page_home.html";
    if ($page === "blog_list") {
        $pages = implode(" ", getBlogPages());
        $blogPlain = file_get_contents(__DIR__ . '/../pages/blogs.html');
    
        return str_replace("{{BLOG_ITEMS}}", $pages, $blogPlain); 
    } else {
        $content = file_get_contents(__DIR__ . '/../pages/' . $page);
        if ($content === false) {
            return file_get_contents(__DIR__ . '/../pages/page_home.html');
        } else {
            return $content;
        }
    }
}
