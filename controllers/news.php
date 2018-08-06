<?php

include(dirname(__FILE__) . '/../models/news.php');

$news = getNews();

include(dirname(__FILE__) . '/../views/news.php');