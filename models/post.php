<?php

function upImg(array $request)
{
	global $db;

	$query = $db->prepare('INSERT INTO articles (title, content, imgurl, date) VALUES (:title, :content, :url, NOW());');
	$query->bindParam(':title', $request[0]);
	$query->bindParam(':content', $request[1]);
	$query->bindParam(':url', $request[2]);
	$query->execute();

}