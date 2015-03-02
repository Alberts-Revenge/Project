<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 */
class Application extends CI_Controller {

    protected $data = array();      // parameters for view components
    protected $id;    // identifier for our content
    protected $choices = array(// our menu navbar
        'Home' => '/', 'Torturer' => '/torturer', 'JediHunt' => '/jedihunt', 'Tombs' => '/tombs'
    );

    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */
    function __construct() {
        parent::__construct();
        $this->data = array();
        $this->data['pagetitle'] = 'Welcome, Dark Lord';
    }

    /**
     * Render this page
     */
    function render() {
        $this->data['menubar'] = build_menu_bar($this->choices);
        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);

        // convert Carboose output into view parameters
        $this->data['caboose_styles'] = $this->caboose->styles();
        $this->data['caboose_scripts'] = $this->caboose->scripts();
        $this->data['caboose_trailings'] = $this->caboose->trailings();

        $this->data['data'] = &$this->data;
        $this->parser->parse('_template', $this->data);
    }

}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */