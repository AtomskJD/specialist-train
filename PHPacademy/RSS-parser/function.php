<?php 
function php_net_feed($limit=5)   {
    $output = array();
    $feed_url = 'http://www.php.net/feed.atom';
    $feed = simplexml_load_file($feed_url);
    $x = 1;

    foreach ($feed->entry as $item) {
        if ($x <= $limit) {
            $title = $item->title;
            $url = $item->id;
            $output[] = array(
                'title' => $title,
                'url' => $url
                );
        }
    $x++;
    }
    return $output;
}
?>