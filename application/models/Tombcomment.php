<?php

/**
 * Data access wrapper for "tumbcomment" table.
 *
 */
class Tombcomment extends MY_Model2 {

    // constructor
    function __construct() {
        parent::__construct('tombcomments', 'id', 'tombid');
    }

}
