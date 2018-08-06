<?php

include(dirname(__FILE__) . '/../models/edit.php');

$news = getNews();

include(dirname(__FILE__) . '/../views/edit.php');