<!doctype html>
<html lang="ru">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>&#171;Open Source&#187; -- электронный журнал о свободном ПО и ПО с открытым кодом</title>
  <!-- <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin,cyrillic" type="text/css" /> -->
  <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
  <header>
    <a href="http://osa.samag.ru/" title="Сайт журнала">Сайт журнала</a>
    <span class="right"><a href="atom.xml" title="Подписаться по RSS" target="_blank">Подписаться</a></span>
    <div class="center">
      Скачать
      <a href="/OpenSource.torrent" title="Скачать .torrent файл">torrent</a> или по
      <a href="/osa/" title="Каталог">http</a>
    </div>
  </header>

  <div class="content">
<?php
  $release = array();
  $file = fopen('osa.csv', 'r');
      
  while($line = fgetcsv($file, 200, '|')) {
    $key = array_shift($line);
    $release[$key] = $line;
  } fclose($file);

  foreach($release as $number => $value) {
    echo("    <p class=\"release\">\n      ".$number."\n");
    echo("      <a class=\"download\" href=\"".$value[0]."\" title=\"\">Скачать</a>\n");
    echo("    </p>\n");
  }
?>
  </div>

  <footer>
    <p class="date">Последнее обновление: 22 Aug 2013</p>
    2013 by <a href="http://iiiypuk.me/" title="Автор">iiiypuk</a>
  </footer>
</body>
</html> 
