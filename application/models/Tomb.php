<?php

/**
 * Data access wrapper for "tomb" table.
 *
 */
class Tomb extends MY_Model {

    // Constructor
    public function __construct() {
        parent::__construct('tomb', 'id');
    }

}
