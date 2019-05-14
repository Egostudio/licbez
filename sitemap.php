<?php

require_once('api/Okay.php');
$okay = new Okay();

header("Content-type: text/xml; charset=UTF-8");
print '<?xml version="1.0" encoding="UTF-8"?>'."\n";
print '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";

// если стартануть сессию то будет не верно брать префикс ссылки для языка
$lang_link = $okay->languages->get_lang_link();

// Главная страница
$url = $okay->config->root_url.'/'.$lang_link;
print "\t<url>"."\n";
print "\t\t<loc>$url</loc>"."\n";
print "\t</url>"."\n";

// Страницы
foreach($okay->pages->get_pages() as $p) {
    if($p->visible && $p->menu_id == 1 && $p->url) {
        $url = $okay->config->root_url.'/'.$lang_link.esc($p->url);
        print "\t<url>"."\n";
        print "\t\t<loc>$url</loc>"."\n";        
        print "\t</url>"."\n";
    }
}

// Блог
foreach($okay->blog->get_posts(array('visible'=>1)) as $p) {
    $url = $okay->config->root_url.'/'.$lang_link.$p->type_post.'/'.esc($p->url);
    print "\t<url>"."\n";
    print "\t\t<loc>$url</loc>"."\n";    
    print "\t</url>"."\n";
}

// Категории
foreach($okay->categories->get_categories() as $c) {
    if($c->visible) {
        $url = $okay->config->root_url.'/'.$lang_link.'category/'.esc($c->url);
        print "\t<url>"."\n";
        print "\t\t<loc>$url</loc>"."\n";        
        print "\t</url>"."\n";
    }
}

// Бренды
foreach($okay->brands->get_brands() as $b) {
    $url = $okay->config->root_url.'/'.$lang_link.'brands/'.esc($b->url);
    print "\t<url>"."\n";
    print "\t\t<loc>$url</loc>"."\n";    
    print "\t</url>"."\n";
}

// Товары
$okay->db->query("SELECT url, last_modify FROM __products WHERE visible=1");
foreach($okay->db->results() as $p) {
    $url = $okay->config->root_url.'/'.$lang_link.'products/'.esc($p->url);
    print "\t<url>"."\n";
    print "\t\t<loc>$url</loc>"."\n";    
    print "\t</url>"."\n";
}

print '</urlset>'."\n";

function esc($s) {
    return(htmlspecialchars($s, ENT_QUOTES, 'UTF-8'));    
}
