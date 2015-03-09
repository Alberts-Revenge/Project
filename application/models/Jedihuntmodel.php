<?php

/**
 * Data access wrapper for "jedihunt" table.
 *
 */
class jedihuntmodel extends MY_Model{
    
    function __construct() {
        parent::__construct('jedihunt', 'ID');
    }
    
}