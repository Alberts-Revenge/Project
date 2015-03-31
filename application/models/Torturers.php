<?php

/**
 * Data access wrapper for "torturer" table.
 *
 */
class Torturers extends MY_Model {
    // Constructor
    public function __construct() {
       parent::__construct('torturer', 'id');	
    }

}
