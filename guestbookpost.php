      <?php 
				$name = trim($_POST['name']);
				$email = trim($_POST['email']);
				$url = trim($_POST['url']);
				$city = trim($_POST['city']);
				$state = trim($_POST['state']);
				$country = trim($_POST['country']);
				$activities = trim($_POST['activities']);
				$vacations = trim($_POST['vacations']);
				$comments = trim($_POST['comments']);
				$backcount = trim($_POST['backcount']);
				if ($url != '') {
					if (strpos($url,"http://") === FALSE) {
						$url = "http://$url";
					}
				}
	    	$db_Table = "GuestBook"; // Test Table in my DB
		
  	    include "dbconnector.php"; // DB info
		
        $link = mysql_connect("$dbhost", "$dbuser", "$dbpasswd")
        or die("Could not connect : " . mysql_error() . "<P>");

        mysql_select_db("$dbname") or die ("Could not select database<P>");

        $query = "INSERT INTO GuestBook (SourceCode, EntryDttm, Name, EMail, URL, City, State, Country, Activities, Vacations, Comments) VALUES ($sourcecode, Now(), '$name', '$email', '$url', '$city', '$state', '$country', '$activities', '$vacations', '$comments')"; 

        $result = mysql_query($query) or die ("Query failed : " . mysql_error());

        /* Free resultset */
        mysql_free_result($result);

        /* Closing connection */
        mysql_close($link);

				header("Location: http://$websiteurl/" . $homedirectory . "index.php?action=GuestBookList&backcount=$backcount");

      ?>

