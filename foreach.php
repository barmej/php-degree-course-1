<?php

$posts = array(
    array(
        'title'=> 'الموضوع الاول',
        'content' => 'المحتوى 1'
    ),
    array(
        'title'=> 'الموضوع الثاني',
        'content' => 'المحتوى 2'
    )
);

foreach($posts as $id => $post){
    echo $id." Title: ".$post['title'];
    echo "<br>";
    echo $post['content'];
    echo "<br>";
}

?>