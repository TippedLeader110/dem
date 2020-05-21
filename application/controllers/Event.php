<?php
defined('BASEPATH') OR 
exit('No direct script access allowed');
/**
 * Version: 1.0.0
 *
 * Description of Event Controller
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 *
 **/

// Event class
class Event extends CI_Controller {
	//Load libraries in Constructor.
	public function __construct() {
        parent::__construct();
        $this->load->model('Event_model', 'event');

    }
	// index method
	public function index() {
        $data['metaDescription'] = 'Integrate FullCalendar in Codeigniter';
        $data['metaKeywords'] = 'Integrate FullCalendar in Codeigniter';
        $data['title'] = "Integrate FullCalendar in Codeigniter | TechArise";
        $data['breadcrumbs'] = array('Integrate FullCalendar in Codeigniter' => '#');
        $this->load->view('calendar/index', $data);
    }

    // load event data
    public function loadEventData() {
        $json = array();
        $dataInfo = $this->event->eventList();       
        foreach($dataInfo as $element) {
            $json[] = array(
                'title' =>$element['title'],
                'start' => date('Y-m-d G:i:s', $element['start_date']),
                'type' => 'gc_event',
                'color' => '#1D8FA3',
                'textColor' => '#FFFFFF',
                'class' => 'gcal-day-grid',
            );
        }
        $this->output->set_header('Content-Type: application/json');
        echo json_encode($json, true);
    }
}
?>