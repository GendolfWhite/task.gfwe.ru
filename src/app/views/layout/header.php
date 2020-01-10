<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
	<script src='/theme/js/libs.js'></script>
	<link rel="stylesheet" type="text/css" href="/theme/css/styles.css">
</head>
<body>
<nav id='menu'>
	<ul class='wrap flex'>
		<? $code = " class='current'"; ?>
		<li<? $this->show('task', $code); ?>><a href="/task/">Задачи</a></li>
		<li<? $this->show('doers', $code); ?>><a href="/doers/">Исполнители</a></li>
		<li<? $this->show('status', $code); ?>><a href="/status/">Состояния</a></li>
		<li<? $this->show('position', $code); ?>><a href="/position/">Должности</a></li>
	</ul>
</nav>
<main id='site'>
	<div class='wrap'>