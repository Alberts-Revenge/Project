<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Jedihunt extends Application {

    public function index() {
//		$this->load->view('jedihunt');

        $this->data['pagebody'] = 'jedihunt';
        // set up data for jediHunt

        $source = $this->info->all_for_jedihunt();
        $planets = array();
        foreach ($source as $record) {
            $planets[] = array('planet' => $record['planet'], 'pic' => $record['pic'], 'info' => $record['info']);
        }
        $this->data['planets'] = $planets;

        $this->render();
    }

}

/* End of file Jedihunt.php */
/* Location: ./application/controllers/Jedihunt.php */