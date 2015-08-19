
<?php

include "db.php";
mysql_select_db($mysql_database, $dbuser)  or exit('Error Selecting database: '.mysql_error()); ;

/* user config variables */
$max_items = 7; /* max number of news items to show */

/* make database connection */
// $db = mysql_connect ('localhost','root','Berskin99');
 //mysql_select_db ('test',$db);

function displayNews($all = 0) {
    /* bring in two variables
     * $db is our database connection
     * $max_items is the maximum number
     * of news items we want to display */
    global  $max_items;
    
    /* query for news items */
    if ($all == 0) {
        /* this query is for up to $max_items */
        $querying = "SELECT id,title,newstext," . 
                 "DATE_FORMAT(postdate, '%Y-%m-%d') as date " . 
                 "FROM news ORDER BY postdate DESC LIMIT $max_items";
    } else {
        /* this query will get all news */
        $querying = "SELECT id,title,newstext," . 
                 "DATE_FORMAT(postdate, '%Y-%m-%d') as date " .
                 "FROM news ORDER BY postdate DESC";
    }
    $resulting = mysql_query ($querying);
    while ($row = mysql_fetch_assoc ($resulting)) {
        /* display news in a simple table */
        //echo "&lt;TABLE border=\"1\" width=\"300\"&gt;\n";

        /* place table row data in 
         * easier to use variables.
         * Here we also make sure no
         * HTML tags, other than the
         * ones we want are displayed */
        $date = $row['date'];        
        $title = htmlentities ($row['title']);
        $news = nl2br (strip_tags ($row['newstext'], ''));
        
        /* display the data */
        echo "$title posted on $date \n";
        echo "$news \n";
        
        /* get number of comments */
        $comment_query = "SELECT count(*) FROM news_comments " .
                         "WHERE news_id={$row['id']}";
        $comment_result = mysql_query ($comment_query);
        $comment_row = mysql_fetch_row($comment_result);
        
        /* display number of comments with link */
        echo "a href=\"{$_SERVER['PHP_SELF']}" .
             "?action=show&amp;id={$row['id']}\"&gt;Comments&lt;/a&gt;" .
             "($comment_row[0]}&lt;/TD&gt;&lt;/TR&gt;\n";
        
        /* finish up table*/
        echo "&lt;/TABLE&gt;\n";
        echo "&lt;BR&gt;\n";
    }
    
    /* if we aren't displaying all news, 
     * then give a link to do so */
    if ($all == 0) {
        echo "&lt;a href=\"{$_SERVER['PHP_SELF']}" .
             "?action=all\"&gt;View all news&lt;/a&gt;\n";
    }
}

function displayOneItem($id) {
    global $db;
    
    /* query for item */
    $query = "SELECT * FROM news WHERE id=$id";
    $result = mysql_query ($query);
    
    /* if we get no results back, error out */
    if (mysql_num_rows ($result) == 0) {
        echo "Bad news id\n";
        return;
    }
    $row = mysql_fetch_assoc($result);
    echo "&lt;TABLE border=\"1\" width=\"300\"&gt;\n";

    /* easier to read variables and 
     * striping out tags */
    $title = htmlentities ($row['title']);
    $news = nl2br (strip_tags ($row['newstext'], '&lt;a&gt;&lt;b&gt;&lt;i&gt;&lt;u&gt;'));
    
    /* display the items */
    echo "$title \n";
    echo "$news \n";
    
    //echo "&lt;/TABLE&gt;\n";
   // echo "&lt;BR&gt;\n";
    
    /* now show the comments */
    displayComments($id);
}

function displayComments($id) {
    /* bring db connection variable into scope */
    global $db;
    
    /* query for comments */
    $query = "SELECT * FROM news_comments WHERE news_id=$id";
    $result = mysql_query ($query);
    echo "Comments:&lt;BR&gt;&lt;HR width=\"300\"&gt;\n";
    
    /* display the all the comments */
    while ($row = mysql_fetch_assoc ($result)) {
        echo "&lt;TABLE border=\"1\" width=\"300\"&gt;\n";
        
        $name = htmlentities ($row['name']);
        echo "$name \n";
    
        $comment = strip_tags ($row['comment']);
        $comment = nl2br ($comment);
        echo "$comment \n";
    
        //echo "&lt;/TABLE&gt;\n";
       // echo "&lt;BR&gt;\n";
    }
    
    /* add a form where users can enter new comments */
    echo "&lt;HR width=\"300\"&gt;";
    echo "&lt;FORM action=\"{$_SERVER['PHP_SELF']}" .
         "?action=addcomment&amp;id=$id\" method=POST&gt;\n";
    echo "Name: &lt;input type=\"text\" " .
         "width=\"30\" name=\"name\"&gt;&lt;BR&gt;\n";
    echo "&lt;TEXTAREA cols=\"40\" rows=\"5\" " .
         "name=\"comment\"&gt;&lt;/TEXTAREA&gt;&lt;BR&gt;\n";
    echo "&lt;input type=\"submit\" name=\"submit\" " .
         "value=\"Add Comment\"\n";
    echo "&lt;/FORM&gt;\n";
     
}

function addComment($id) {
    global $db;
    
    /* insert the comment */
    $query = "INSERT INTO news_comments " .
             "VALUES('',$id,'{$_POST['name']}'," .
             "'{$_POST['comment']}')";
    mysql_query($query);
    
    echo "Comment entered. Thanks!&lt;BR&gt;\n";
    echo "&lt;a href=\"{$_SERVER['PHP_SELF']}" .
         "?action=show&amp;id=$id\"&gt;Back&lt;/a&gt;\n";
}

/* this is where the script decides what do do */

//echo "&lt;CENTER&gt;\n";
switch($_GET['action']) {
    
    case 'show':
        displayOneItem($_GET['id']);
        break;
    case 'all':
        displayNews(1);
        break;
    case 'addcomment':
        addComment($_GET['id']);
        break;
    default:
        displayNews();
}
//echo "&lt;/CENTER&gt;\n";
?>