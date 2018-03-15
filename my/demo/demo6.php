<?php
// Assuming you installed from Composer:
require "../vendor/autoload.php";
use Masterminds\HTML5;


// An example HTML document:
$html = <<< 'HERE'
  <html>
  <head>
    <title>TEST</title>
  </head>
  <body id='foo'>
    <h1>Hello World</h1>
    <p>This is a test of the HTML5 parser.</p>
  </body>
  </html>
HERE;

// Parse the document. $dom is a DOMDocument.
$html5 = new HTML5();
$dom = $html5->loadHTML($html);

// Render it as HTML5:
print $html5->saveHTML($dom);

// Or save it to a file:
$html5->save($dom, 'out.html');

?>