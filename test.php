<?
  require 'dump.php';

  $array = array(
    'hèllo world'                       => '(͡°͜ʖ͡°)',
    'empty string'                      => '',
    'multiline string'                  => "first line and some padding   \nsecond line",
    'infinity'                          => INF,
    'regular expression (pcre)'         => '/^([0-9a-zA-Z]([-\.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/',
    'multi'                             => array(1, 2, 3, array(4, 5, 6), 'FUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU'),
    'matching class'                    => 'DateTime',
    'matching file'                     => 'file.txt',
    'incomplete object'                 => unserialize('O:3:"Foo":1:{s:3:"bar";i:5;}'),
    'empty object'                      => new \StdClass(),
    'closed CURL resource'              => $closedCurlRes,
    'matching date/file/function/class' => 'today',
    'url'                               => 'http://google.com',
  );

  d($array);