<?php
/*
    Added View for displaying elements instead from index.php
*/
foreach ($viewData['news'] as $news) {

	echo("############ NEWS " . $news['title'] . " ############\n");
	echo($news['body'] . "\n");
	
	foreach ($viewData['comments'] as $comment) {

		if ($comment['news_id'] == $news['id']) {
			echo("Comment " . $comment['id'] . " : " . $comment['body'] . "\n");
		}
	}
}