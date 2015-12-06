<!--
This file contains PHP login helper functions.
For Use in Hackathon.
History:
Who	Date		Comment
RC	 7-Nov-13	Created.
-->
<?php
# Includes these helper functions
require( 'includes/helpers.php' ) ;

# Loads a specified or default URL.
function load( $page = 'login.txt', $pid = -1 )
{
  # Begin URL with protocol, domain, and current directory.
  $url = 'http://' . $_SERVER[ 'HTTP_HOST' ] . dirname( $_SERVER[ 'PHP_SELF' ] ) ;

  # Remove trailing slashes then append page name to URL and the print id.
  $url = rtrim( $url, '/\\' ) ;
  $url .= '/' . $page . '?id=' . $pid;

  # Execute redirect then quit.
  session_start( );

  header( "Location: $url" ) ;

  exit() ;
}

# Validates the print name.
# Returns -1 if validate fails, and >= 0 if it succeeds
# which is the primary key id.
function validate($username = '', $password = '')
{
    global $dbc;

    if(empty($username) or empty($password) )
      return -1 ;
    # Make the query
    $query = "SELECT id, username, password FROM users WHERE username = '" . $username . "' and password = '" .md5($password) ."' " ;
    # Execute the query
    $results = mysqli_query( $dbc, $query ) ;
    check_results($results);

    # If we get no rows, the login failed
    if (mysqli_num_rows( $results ) == 0 )
      return -1 ;

    # We have at least one row, so get the frist one and return it
    $row = mysqli_fetch_array($results, MYSQLI_ASSOC) ;

    $pid = $row [ 'id' ] ;

    return intval($pid) ;
}
?>