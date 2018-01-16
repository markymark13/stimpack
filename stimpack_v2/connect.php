<?php

/*** begin the session **/
session_start();
    try
    {
        /*** connect to database ***/
        /*** mysql hostname ***/
      /*** connect to database ***/
    /*** mysql hostname ***/
    $mysql_hostname = 'localhost';

    /*** mysql username ***/
    $mysql_username = 'winterma_mark1';

    /*** mysql password ***/
    $mysql_password = 'dinger';

    /*** database name ***/
    $mysql_dbname = 'winterma_homebrew';



        /*** select the users name from the database ***/
        $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        /*** $message = a message saying we have connected ***/

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the insert ***/
        $stmt = $dbh->prepare("SELECT phpro_username FROM phpro_users 
        WHERE phpro_user_id = :phpro_user_id");

        /*** bind the parameters ***/
        $stmt->bindParam(':phpro_user_id', $_SESSION['user_id'], PDO::PARAM_INT);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $phpro_username = $stmt->fetchColumn();

        /*** if we have no something is wrong ***/
        if($phpro_username == false)
        {
            $message = 'Access Error';
        }
        else
        {
            $message = 'Welcome '.$phpro_username;
        }
    }
    catch (Exception $e)
    {
        /*** if we are here, something is wrong in the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }

# db configurations
define('DB_HOST',    'localhost');
define('DB_USER',    'winterma_mark1');
define('DB_PASS',    'dinger');
define('DB_NAME',    'winterma_homebrew');

# db connect
function dbConnect($close=true){
  global $link;

  if (!$close) {
    mysql_close($link);
    return true;
  }

  $link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Could not connect to MySQL DB ') . mysql_error();
  if (!mysql_select_db(DB_NAME, $link))
    return false;
}

?>
<?
if( $_POST )
{
   $con = mysql_connect("localhost","winterma_mark1","dinger");
 
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
 
 mysql_select_db("winterma_homebrew", $con);
}
?>
