<?
  echo '
    <!DOCTYPE HTML>
    <html>
      <head>
        <title>dump</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <style>
          * {font:normal normal 12px/18px Consolas, Monaco, Andale Mono, Courier New, monospace;color:#333;}
        </style>
      </head>
      <body>
  ';

  function d() {
    $args = func_get_args();

    foreach($args[0] as $index => $arg) {
    echo $arg;
    }
  }