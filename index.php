<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <title>MySQL Console</title>
      <link href="style.css" rel="stylesheet">
      <style type="text/css">
         body {
         padding-top: 20px;
         padding-bottom: 20px;
         }
      </style>
      <script>
      </script>
   </head>
   <body>
      <?php
         $mysql = mysql_connect('localhost', 'user', '123456');
         
         if($_POST)
	    {
	    $query = $_POST['query'];
	    $result = mysql_query($query);
	    }
	    else
          {
           $result = mysql_query("show databases");
           $query = 'No query';
	  }
         
      ?>
      <div class="container-fluid">
         <div class="row-fluid">
            <div class="span12">
               <div class="row-fluid">
               <?
                        if($result) {
	      ?>
                  <div class="alert alert-success">
                     <?
                     echo $query;
                     }
                     else {
                     ?>
                     <div class="alert alert-danger">
                     <?
                     echo 'Error: ' . mysql_error();
                     }
                     ?>
                  </div>
    <form method="post">
    <fieldset>
    <legend>Query</legend>
    <textarea class="span12" name="query" rows="3"></textarea>
    <br>
    <button type="submit" class="btn">Submit</button>
    </fieldset>
    </form>
    <table class="table table-bordered">
                     <thead>
                     <?
                     $field = mysql_fetch_field($result);
                     for($i=0;$i<mysql_num_fields($result);$i++)
                     {
		      $th = mysql_fetch_field($result, $i)->name;
		     echo '<th>' . $th . '</th>';
		     }
		     ?>
                     </thead>
                     <tbody>
                     <?
                     while($row = mysql_fetch_row($result))
                     {
			    echo '<tr>';
 				  for($i=0;$i<count($row);$i++)
 				  {
				    echo '<td>' . $row[$i] . '</td>';
 				  }
			    echo '</tr>';
                     }
                     mysql_free_result($result);
                     mysql_close($mysql);
                     ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <footer>
            <div class="alert alert-info">
               Created by <a class="btn btn-link" href="http://minhazulhaque.com">Muhammad Minhazul Haque</a> &copy; 2013
            </div>
         </footer>
      </div>
   </body>
</html>