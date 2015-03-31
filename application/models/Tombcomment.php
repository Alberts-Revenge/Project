<?php

/**
 * Data access wrapper for "tombcomment" table.
 *
 */
class Tombcomment extends MY_Model {

    // constructor
    function __construct() {
        parent::__construct('tombcomments', 'id');
    }

}
