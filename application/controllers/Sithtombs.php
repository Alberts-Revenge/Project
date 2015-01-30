<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Sithtombs extends Application {

    public function index() {
//		$this->load->view('sithtombs');
        $this->data['pagebody'] = 'sithtombs';
        $this->render();
    }

}

/* End of file Sithtombs.php */
/* Location: ./application/controllers/Sithtombs.php */