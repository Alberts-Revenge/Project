<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
  =======
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

class Torturer extends Application {

    public function index() {
        $this->data['pagebody'] = 'torturer';

        $this->data['planets'] = $this->torturers->all();

        $this->render();
    }

    // method to display just a single quote
    function one($id) {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        $this->data = array_merge($this->data, (array) $this->torturers->get($id));

        // invoke the rating widget
        $this->caboose->needed('jrating', 'hollywood');
        $this->data['average'] = ($this->data['vote_count'] > 0) ? ($this->data['vote_total'] / $this->data['vote_count']) : 0;
//        echo $this->data['average'];
//        die();
        $this->render();
    }

    // handle a rating
    function rate() {
        // detect non-AJAX entry
        if (!isset($_POST['action']))
            redirect("/");
        // extract parameters
        $id = intval($_POST['idBox']);
        $rate = intval($_POST['rate']);
        // update the posting
        $record = $this->torturers->get($id);
        if ($record != null) {
            $record->vote_total += $rate;
            $record->vote_count++;
            $this->torturers->update($record);
        }
        $response = 'Thanks for voting!';
        echo json_encode($response);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */
