<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class jedihuntmodel extends MY_Model{
    
    function __construct() {
        parent::__construct('jedihunt', 'ID');
    }
    
    
    function get_all(){
        $query = $this->db->select('*')->from('jedihunt')->get();
        return $query->result();
        /*foreach ($query->result() as $row)
        {
            echo $row->Name;
            echo $row->Location;
            echo $row->Description;
        }*/
    }
}