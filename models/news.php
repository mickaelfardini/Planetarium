<?php
	
function getIdNews(array $request)
{
	global $db;
	$id = array();

	$query = $db->prepare('SELECT * FROM articles WHERE id=:id');
	$query->bindParam(':id', $request[0]);
	$query->execute();

	while ($data = $query->fetch()) {
		$id[] = $data;
	}
	return $id;

}