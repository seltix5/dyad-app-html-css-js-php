<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My PHP App</title>
    <style>
      body {
        background-color: #fff3e0 !important;
        font-family: sans-serif;
        padding: 20px;
      }
    </style>
  </head>
  <body>
    <div id="root">
      <h1><?php echo 'Hello, World! PHP'; ?></h1>
      <p>This is a PHP page.</p>
      <p>
        <a href="index.html">Go to HTML Hello World Page</a>
      </p>
    </div>
	<div>
	<?php
	phpinfo(); // This will output the PHP configuration information
	?>
	</div>
  </body>
</html>