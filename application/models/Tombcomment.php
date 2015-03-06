<?php

/**
 * Data access wrapper for "tumbcomment" table.
 *
 */
class Tombcomment extends MY_Model {

    // constructor
    function __construct() {
        parent::__construct('tombcomments', 'id');
    }

}
