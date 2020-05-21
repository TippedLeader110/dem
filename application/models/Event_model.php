<?php
defined('BASEPATH') OR 
    exit('No direct script access allowed');
/**
 * Version: 1.0.0
 *
 * Description of Event model
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 *
 **/

// Event class
class Event_model extends CI_Model {
	
	// Fetch data according to per_page limit.
	public function eventList() {       
        $this->db->select(array('e.id', 'e.title', 'e.start_date', 'e.end_date', 'e.created_date', 'e.modified_date', 'e.status'));
        $this->db->from('event as e');          
        $query = $this->db->get();
        return $query->result_array();
    }

}
?>