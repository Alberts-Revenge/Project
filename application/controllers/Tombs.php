<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
class Tombs extends Application {

    function __construct() {
        parent::__construct();

        // load the helper to display the form
        $this->load->helper('formfields');
    }

    public function index() {
        // display all tombs
        $this->data['pagebody'] = 'tombs';

        $this->data['planets'] = $this->tomb->all();
        
        $this->data['comments'] = $this->tombcomment->size();

        $this->render();
    }

    // method to display just a single tomb
    function one($tombid) {
        $this->data['pagebody'] = 'tomb_comment';    // this is the view we want shown

        $this->data['name'] = $this->tomb->get($tombid)->name;
        $this->data['picture'] = $this->tomb->get($tombid)->picture;
        $this->data['description'] = $this->tomb->get($tombid)->description;

        $comments = $this->tombcomment->some('tombid', $tombid);
        $this->data['allcomments'] = $comments;

        $this->data['id'] = $tombid;

        $this->render();
    }

    // Present a comment for adding/editing
    function present($tombid, $id = null) {
        // format any errors
        $message = '';
        if (count($this->errors) > 0) {
            foreach ($this->errors as $booboo)
                $message .= $booboo . BR;
        }
        $this->data['message'] = $message;

        $this->data['tombid'] = $tombid;
        $this->data['name'] = $this->tomb->get($tombid)->name;
        $this->data['picture'] = $this->tomb->get($tombid)->picture;
        $this->data['brief'] = $this->tomb->get($tombid)->brief;
        $this->data['description'] = $this->tomb->get($tombid)->description;
        $record = ($id == null) ? $this->tombcomment->create() : $this->tombcomment->get($id);
        $this->data['fcomment'] = makeTextArea('Comment', 'comment', $record->comment);
        $this->data['pagebody'] = 'tomb_add_comment';

        // added the button with the formfileds helper
        $this->data['fsubmit'] = makeSubmitButton('New Comment', "Click here to validate the comment data", 'btn-success');
        $this->render();
    }

    //method to add a comment
    function add_comment($tombid) {
        $this->present($tombid);
    }

    // process a quotation edit
    function confirm($tombid) {
        $record = $this->tombcomment->create();
        // Extract submitted fields

        $record->id = $this->tombcomment->size() + 1;
        $record->tombid = $tombid;
        $record->comment = $this->input->post('comment');

        // validation
//        if (empty($record->comment))
//            $this->errors[] = 'You must leave some comment.';
//        if (strlen($record->comment) < 20)
//            $this->errors[] = 'A comment must be at least 20 characters long.';


        $this->tombcomment->add($record);

        redirect('/tombs/one/' . $tombid);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */