<!DOCTYPE html>

<!--
  This is WIDE - W Integrated Development Environment
  Developed by D. Retterer - 2017
-->

<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="TopLevel.css"/> 
    <script src="NavTree.js"></script>
    <script src="Database.js"></script>
    <title>WIDE</title>
  </head>
  
  <body onload="addEvents();">
    <div class="container">
      <header>
        <h1>Tori's Database!</h1>
       	<a href="<?php echo 'connection.php'; ?>"></a>
       	<a href="<?php echo 'select.php'; ?>">Connection to Server</a>
      </header>
      <nav>
        <ul id="Tables" class="LinkedList">
          <li>
            Table 1
            <ul>
              <li>Columns</li>
              <li>Stored Procedures</li>
            </ul>
          </li>
          <li>Table 2</li>
            <ul>
              <li>Columns</li>
              <li>Stored Procedures</li>
            </ul>
          <li>Table 3</li>
            <ul>
              <li>Columns</li>
              <li>Stored Procedures</li>
            </ul>
        </ul>
      </nav>      
      <article id="workspace">
          <textarea id="sqletc"></textarea>
          <textarea id="output"></textarea>
          <input type="button" value="Go" onclick="Go();"/>
      </article>
      <footer>
        &copy;2017 onucs.org
      </footer>
    </div>
  </body>
</html>