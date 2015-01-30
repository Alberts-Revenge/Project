<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Jedihunt extends Application {

	public function index()
	{
		$this->data['pagebody'] = 'jediHunt';
                $this->render();
                //$this->load->view('jedihunt');
	}
}

/* End of file Jedihunt.php */
/* Location: ./application/controllers/Jedihunt.php */