/**
 *  articleID is the id in your database which u identify the article
 */


if(!isset($_SESSION['visitor'])){                               // To see if visitor first watch your article 
        $visitor=session_id();                                  // get session id
        $_SESSION['visitor'] = $visitor;                        // set visitor
        $_SESSION['read_case'] = array();                       // ensure it's a array
        array_push($_SESSION['read_case'],$articleID);          // push articleID in array
        /* update your article popularity in your database */
    }else{
        if(!in_array($case, $_SESSION['read_case'])){           // To see if this articleID is read or not if not popularity +1
            array_push($_SESSION['read_case'],$case);
            /* update your article popularity in your database */
        }
    }
