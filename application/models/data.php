<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_data()
    {
       //SELECT STR_TO_DATE(date_column,"%M") as month_date FROM yourTable
	   $this->db->select('receive_date,receive_amount');
    $this->db->from('payments');
    $this->db->group_by('receive_date');
    $query = $this->db->get();
        return $query->result();
    }

}