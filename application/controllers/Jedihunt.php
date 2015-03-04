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
    }
    
    function index()
    {
        $this->data['title'] = 'Most Wanted Jedi';    // this is the view we want shown
        // $this->data['jedis'] = $this->jedihuntmodel->all();
        $this->data['jedi'] = $this->jedihuntmodel->all();
        $this->data['pagebody'] = 'jedihunt';
        $this->render();
    }
    
    function present($jedi){
        // format any errors
        $message = '';
        if (count($this->errors) > 0) {
            foreach ($this->errors as $booboo)
                $message .= $booboo . BR;
        }
        $this->data['message'] = $message;

        $this->data['fName'] = makeTextField('Name', 'Name', $jedi->Name);
        $this->data['fLocation'] = makeTextField('Location', 'Location', $jedi->Location);
        $this->data['fPic'] = makeTextField('Picture', 'Pic', $jedi->Pic);
        $this->data['fDescription'] = makeTextArea('Description', 'Description', $jedi->Description);
        $this->data['pagebody'] = 'jedi_edit';

        // added the button with the formfileds helper
        $this->data['fSubmit'] = makeSubmitButton('Process Jedi', "Click here to validate the Jedi data", 'btn-success');
        $this->render();
    }
    function add(){
        $jedi = $this->jedihuntmodel->create();
        $this->present($jedi);
    }
    
    function confirm(){
        $record = $this->jedihuntmodel->create();
        // Extract submitted fields
        $record->Name = $this->input->post('Name');
        $record->Location = $this->input->post('Location');
        $record->Pic = $this->input->post('Pic');
        $record->Description = $this->input->post('Description');
        
        
        // validation
        if (empty($record->Name))
            $this->errors[] = 'You must specify the name of the Jedi';
        if (empty($record->Description))
            $this->errors[] = 'Please provide a description for the Jedi scum.';

        // redisplay if any errors
        if (count($this->errors) > 0) {
            $this->present($record);
            return; // make sure we don't try to save anything
        }
        
        if (empty($record->id))
            $this->jedihuntmodel->add($record);
        else
            $this->jedihuntmodel->update($record);
        redirect('../index.php/jedihunt');
         
    }

}

/* End of file Jedihunt.php */
/* Location: ./application/controllers/Jedihunt.php */