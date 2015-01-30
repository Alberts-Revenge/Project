<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Torturer extends Application {

    public function index() {
//		$this->load->view('torturer');
        $this->data['pagebody'] = 'torturer';
        $this->render();
    }

}

/* End of file Torturer.php */
/* Location: ./application/controllers/Torturer.php */