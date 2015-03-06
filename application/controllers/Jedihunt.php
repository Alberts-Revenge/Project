<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Jedihunt extends Application {

    function __construct() {
        parent::__construct();

        // load the helper to display the form
        $this->load->helper('formfields');
        $config = array();
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $config['max_filename'] = '100';
        $this->load->library('upload', $config);
    }

    function index() {
        $this->data['title'] = 'Most Wanted Jedi';    // this is the view we want shown
        // $this->data['jedis'] = $this->jedihuntmodel->all();
        $this->data['jedi'] = $this->jedihuntmodel->all();
        $this->data['pagebody'] = 'jedihunt';
        $this->render();
    }

    function present($jedi) {
        // format any errors
        $message = '';
        if (count($this->errors) > 0) {
            foreach ($this->errors as $booboo)
                $message .= $booboo . BR;
        }
        $this->data['message'] = $message;

        $this->data['fName'] = makeTextField('Name', 'Name', $jedi->Name);
        $this->data['fLocation'] = makeTextField('Location', 'Location', $jedi->Location);
        //$this->data['fPic'] = makeTextField('Picture', 'Pic', $jedi->Pic);
        $this->data['fDescription'] = makeTextArea('Description', 'Description', $jedi->Description);
        $this->data['pagebody'] = 'jedi_edit';

        // added the button with the formfileds helper
        $this->data['fSubmit'] = makeSubmitButton('Process Jedi', "Click here to validate the Jedi data", 'btn-success');
        $this->render();
    }

    function add() {
        $jedi = $this->jedihuntmodel->create();
        $this->present($jedi);
    }

    function confirm() {

        $record = $this->jedihuntmodel->create();
        if (!$this->upload->do_upload()) {
            $this->errors[] = $this->upload->display_errors();
        } else {
            
            
            // Extract submitted fields
            $record->Name = $this->input->post('Name');
            $record->Location = $this->input->post('Location');
            $data = $this->upload->data();
            $record->Pic = $data['file_name'];
            $record->Description = $this->input->post('Description');
            //echo print_r($record);
            //die();
            // validation
            if (empty($record->Name))
                $this->errors[] = 'You must specify the name of the Jedi';
            if (empty($record->Description))
                $this->errors[] = 'Please provide a description for the Jedi scum.';
            // This error checking for Pic does not work, Master Jedi Yoda could not Help :(
            //if (empty($record->Pic))
              //  $this->errors[] = 'Please specify a picture for the jedi scum';
        }
        // redisplay if any errors
        if (count($this->errors) > 0) {
            $this->present($record);
            return; // make sure we don't try to save anything
        }

        if (empty($record->id))
            $this->jedihuntmodel->add($record);
        else
            $this->jedihuntmodel->update($record);
        redirect('/jedihunt');
    }

}

/* End of file Jedihunt.php */
/* Location: ./application/controllers/Jedihunt.php */