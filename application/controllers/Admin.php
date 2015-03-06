<?php

class Admin extends Application {

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

    public function torturer() {
        $this->data['pagebody'] = 'torturer_admin';
        $this->data['torturer'] = $this->torturers->all();

        $this->render();
    }

    public function torturer_add() {
        $torturer = $this->torturers->create();
        $this->torturer_present($torturer);
    }

    public function torturer_remove($id) {
        $this->torturers->delete($id);

        redirect('/admin/torturer');
    }

    public function torturer_edit($id) {
        $torturer = $this->torturers->get($id);
        $this->torturer_present($torturer);
    }

    public function torturer_present($torturer) {
        // format any errors
        $message = '';
        if (count($this->errors) > 0) {
            foreach ($this->errors as $booboo)
                $message .= $booboo . BR;
        }
        $this->data['message'] = $message;
        $this->data['id'] = $torturer->id;
        $this->data['fname'] = makeTextField('Name', 'name', $torturer->name);
        $this->data['fbrief'] = makeTextArea('Brief', 'brief', $torturer->brief);
        $this->data['fdescription'] = makeTextArea('Description', 'description', $torturer->description);
        $this->data['pagebody'] = 'torturer_edit';

        // added the button with the formfileds helper
        $this->data['fsubmit'] = makeSubmitButton('Add Torturer', "Click here to validate the Torurer data", 'btn-success');
        $this->render();
    }

    public function torturer_confirm($id = null) {
        if ($id == null)
            $record = $this->torturers->create();
        else
            $record = $this->torturers->get($id);

        if (!$this->upload->do_upload()) {
            $this->errors[] = $this->upload->display_errors();
        } else {
            // Extract submitted fields
            $record->name = $this->input->post('name');
            $record->brief = $this->input->post('brief');
            $data = $this->upload->data();
            $record->picture = $data['file_name'];
            $record->description = $this->input->post('description');

            // validation
            if (empty($record->name))
                $this->errors[] = 'You must specify the name of the Torurer';
            if (empty($record->brief))
                $this->errors[] = 'Please provide a brief description for the Torurer.';
            if (empty($record->description))
                $this->errors[] = 'Please provide a description for the Torurer.';

            // This error checking for Pic does not work, Master Jedi Yoda could not Help :(
            //if (empty($record->Pic))
            //  $this->errors[] = 'Please specify a picture for the jedi scum';
        }

        // redisplay if any errors
        if (count($this->errors) > 0) {
            $this->torturer_present($record);
            return; // make sure we don't try to save anything
        }

        if (empty($record->id))
            $this->torturers->add($record);
        else
            $this->torturers->update($record);

        redirect('/admin/torturer');
    }

    public function tomb() {
        $this->data['pagebody'] = 'tomb_admin';
        $this->data['tomb'] = $this->tomb->all();

        $this->render();
    }

    public function tomb_remove($id) {
        $this->tomb->delete($id);

        redirect('/admin/tomb');
    }

    public function tomb_comment_list($tombid) {
        $this->data['pagebody'] = 'tomb_edit_comment';
        $this->data['name'] = $this->tomb->get($tombid)->name;
        $comments = $this->tombcomment->some('tombid', $tombid);
        $this->data['allcomments'] = $comments;
        $this->render();
    }

    public function tomb_remove_comment( $tombcommentid) {
        $this->tombcomment->delete($tombcommentid);
        redirect('/admin/tomb');
    }

    public function tomb_add() {
        $tomb = $this->tomb->create();
        $this->tomb_present($tomb);
    }

    public function tomb_edit($id) {
        $tomb = $this->tomb->get($id);
        $this->tomb_present($tomb);
    }

    public function tomb_present($tomb) {
        // format any errors
        $message = '';
        if (count($this->errors) > 0) {
            foreach ($this->errors as $booboo)
                $message .= $booboo . BR;
        }
        $this->data['message'] = $message;

        $this->data['id'] = $tomb->id;
        $this->data['fname'] = makeTextField('Name', 'name', $tomb->name);
        $this->data['fbrief'] = makeTextArea('Brief', 'brief', $tomb->brief);
        $this->data['fdescription'] = makeTextArea('Description', 'description', $tomb->description);
        $this->data['pagebody'] = 'tomb_edit';

        // added the button with the formfileds helper
        $this->data['fsubmit'] = makeSubmitButton('Add Tomb', "Click here to validate the Tomb data", 'btn-success');
        $this->render();
    }

    public function tomb_confirm($id = null) {
        if ($id == null)
            $record = $this->tomb->create();
        else
            $record = $this->tomb->get($id);

        if (!$this->upload->do_upload()) {
            $this->errors[] = $this->upload->display_errors();
        } else {

            // Extract submitted fields
            $record->name = $this->input->post('name');
            $record->brief = $this->input->post('brief');
            $data = $this->upload->data();
            $record->picture = $data['file_name'];
            $record->description = $this->input->post('description');

            // validation
            if (empty($record->name))
                $this->errors[] = 'You must specify the name of the Tomb';
            if (empty($record->brief))
                $this->errors[] = 'Please provide a brief description for the Tomb.';
            if (empty($record->description))
                $this->errors[] = 'Please provide a description for the Tomb.';

            // This error checking for Pic does not work, Master Jedi Yoda could not Help :(
            //if (empty($record->Pic))
            //  $this->errors[] = 'Please specify a picture for the jedi scum';
        }

        // redisplay if any errors
        if (count($this->errors) > 0) {
            $this->tomb_present($record);
            return; // make sure we don't try to save anything
        }

        if (empty($record->id))
            $this->tomb->add($record);
        else
            $this->tomb->update($record);


        redirect('/admin/tomb');
    }
    public function jedihunt() {
        $this->data['pagebody'] = 'jedihunt_admin';
        $this->data['jedihunt'] = $this->jedihuntmodel->all();

        $this->render();
    }

    public function jedihunt_add() {
        $jedihunt = $this->jedihuntmodel->create();
        $this->jedihunt_present($jedihunt);
    }

    public function jedihunt_remove($id) {
        $this->jedihuntmodel->delete($id);

        redirect('/admin/jedihunt');
    }

    public function jedihunt_edit($id) {
        $jedihunt = $this->jedihuntmodel->get($id);
        $this->jedihunt_present($jedihunt);
    }

    public function jedihunt_present($jedihunt) {
        // format any errors
        $message = '';
        if (count($this->errors) > 0) {
            foreach ($this->errors as $booboo)
                $message .= $booboo . BR;
        }
        $this->data['message'] = $message;
        $this->data['ID'] = $jedihunt->ID;
        $this->data['fname'] = makeTextField('Name', 'Name', $jedihunt->Name);
        $this->data['fbrief'] = makeTextArea('Location', 'Location', $jedihunt->Location);
        $this->data['fdescription'] = makeTextArea('Description', 'Description', $jedihunt->Description);
        $this->data['pagebody'] = 'jedihunt_edit';

        // added the button with the formfileds helper
        $this->data['fsubmit'] = makeSubmitButton('Add Jedi', "Click here to validate the Torurer data", 'btn-success');
        $this->render();
    }

    public function jedihunt_confirm($id = null) {
        if ($id == null)
            $record = $this->jedihuntmodel->create();
        else
            $record = $this->jedihuntmodel->get($id);

        if (!$this->upload->do_upload()) {
            $this->errors[] = $this->upload->display_errors();
        } else {
            // Extract submitted fields
            $record->Name = $this->input->post('Name');
            $record->Location = $this->input->post('Location');
            $data = $this->upload->data();
            $record->Pic = $data['file_name'];
            $record->Description = $this->input->post('Description');

            // validation
            if (empty($record->Name))
                $this->errors[] = 'You must specify the name of the Torurer';
            if (empty($record->Location))
                $this->errors[] = 'Please provide a brief description for the Torurer.';
            if (empty($record->Description))
                $this->errors[] = 'Please provide a description for the Torurer.';

            // This error checking for Pic does not work, Master Jedi Yoda could not Help :(
            //if (empty($record->Pic))
            //  $this->errors[] = 'Please specify a picture for the jedi scum';
        }

        // redisplay if any errors
        if (count($this->errors) > 0) {
            $this->jedihunt_present($record);
            return; // make sure we don't try to save anything
        }

        if (empty($record->ID))
            $this->jedihuntmodel->add($record);
        else
            $this->jedihuntmodel->update($record);

        redirect('/admin/jedihunt');
    }

}
