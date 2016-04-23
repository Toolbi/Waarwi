<?php

class Addtrip extends Traveller_Controller {

    var $CI;
    var $user_id;
    var $trip_id;
    var $last_trip_id;

    function __construct() {
        parent::__construct();

        $this->CI = & get_instance();
        $this->load->model('vechicle_model');
        $this->load->model('Travel_model');
        $this->load->model('Trip_model');
        $this->load->model('Enquiry_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('date');
        $this->load->model('Customer_model');
        $this->lang->load('backend');
    }

    function index() {
        
        $this->upcoming_trip();
        
        
    }

    function step_1($trip_id = false, $ajax = false) {

        $this->CI = & get_instance();
        $carpool_session['carpool_session'] = $this->CI->carpool_session->userdata('carpool');
        $this->user_id = $carpool_session['carpool_session']['user_id'];
        $user = $this->Travel_model->get_traveller($this->user_id);

        $this->trip_id = $trip_id;

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $data['id'] = '';
        $data['routesdata'] = '';
        $data['tripid'] = "";
        $data['redirect'] = "";
        $data['fhh'] = "";
        $data['thh'] = "";
        $data['fmm'] = '';
        $data['fzone'] = '';
        $data['tmm'] = '';
        $data['tzone'] = '';
        $data['vehicle'] = $this->vechicle_model->getvechicle_list($this->user_id);
        $data['return'] = "";
        $data['vechicletype'] = '';
        $data['txtsource'] = '';
        $data['txtdestination'] = '';
        $data['source_ids'] = '';
        $data['destination_ids'] = '';
        $data['jquerytagboxtext'] = '';
        $data['route_lanlat'] = '';
        $data['return'] = 'no';
        $data['depature_time'] = '';
        $data['arrival_time'] = '';
        $data['hour'] = '';
        $data['return_time'] = '';
        $data['frequency_ids'] = '';
        $data['avail_seats'] = '';
        $data['name'] = $user->user_first_name . '.' . $user->user_last_name;
        $data['number'] = $user->user_mobile;
        if ($user->communication_mobile == 1) {
            $data['number'] = $user->user_secondary_phone;
        }
        $data['comments'] = '';
        $data['vehnum'] = '';
        $data['routes'] = '';
        $data['frequency_values'] = "''";
        $data['amenities_values'] = "''";
        $data['rpt_from_date'] = '';
        $data['amenities_ids'] = '';
        $data['passenger_type_id'] = '';

        if ($trip_id) {
            $trip = $this->Trip_model->get_trip($trip_id);

            if (!$trip) {
                $this->session->set_flashdata('error', lang('error_not_found'));
                redirect('addtrip/step_1');
            }

            $route_lanlat = explode('~,', $trip->trip_routes_lat_lan);
            array_shift($route_lanlat);
            array_pop($route_lanlat);
            $latlan = array();
            foreach ($route_lanlat as $route) {

                $latlan[] = $route . '~';
            }
            $route_lanlat = implode(',', $latlan);
            $trip_route_ids = explode('~', $trip->trip_routes);
            array_shift($trip_route_ids);
            array_pop($trip_route_ids);



            $data['tripid'] = $trip_id;
            $data['vechicletype'] = $trip->trip_vehicle_id;
            $data['txtsource'] = $trip->source;
            $data['txtdestination'] = $trip->destination;
            $data['source_ids'] = $trip->trip_from_latlan;
            $data['destination_ids'] = $trip->trip_to_latlan;
            $trip_route_ids = implode('~', $trip_route_ids);
            $data['jquerytagboxtext'] = $trip_route_ids;
            $data['route_lanlat'] = $route_lanlat;
            $data['return'] = $trip->trip_return;
            $data['depature_time'] = date("g:i a", strtotime($trip->trip_depature_time));
            $data['arrival_time'] = date("g:i a", strtotime($trip->trip_return_time));
            $data['frequency_ids'] = $trip->trip_frequncy;
            $data['avail_seats'] = $trip->trip_avilable_seat;
            $data['number'] = $trip->contact_person_number;
            $data['hour'] = $trip->trip_journey_hours;
            $data['vehnum'] = $trip->vechicle_number;
            $data['comments'] = $trip->trip_comments;
            $data['flexibility'] = $trip->flexibility;
            $data['detour'] = $trip->detour;
            $data['luggage_size'] = $trip->luggage_size;
            $fresult = explode(' ', $data['depature_time']);
            $ftime = explode(':', $fresult[0]);
            $tresult = explode(' ', $data['arrival_time']);
            $ttime = explode(':', $tresult[0]);
            $data['fhh'] = $ftime[0];
            $data['thh'] = $ttime[0];
            $data['fmm'] = $ftime[1];
            $data['fzone'] = $fresult[1];
            $data['tmm'] = $ttime[1];
            $data['tzone'] = $tresult[1];
            $data['frequency_values'] = json_encode(explode(',', str_replace('~', '', $trip->trip_frequncy)));
            $data['passenger_type_id'] = $trip->passenger_type;
            $data['routesdata'] = $trip->route_full_data;
            if ($trip->trip_casual_date == '') {
                $rpt_from_date = '';
            } else {
                $rpt_from_date = date('d/m/Y', strtotime(str_replace("/", "-", $trip->trip_casual_date)));
            }
            $data['rpt_from_date'] = $rpt_from_date;
            //echo $trip->trip_casual_date;
//            echo '<pre>';print_r($data);echo'</pre>';
//            die;
        }

        $this->form_validation->set_rules('vechicletype', 'lang:Vehicle Type', 'trim|required|max_length[250]');
        $this->form_validation->set_rules('txtsource', 'Source Address', 'trim|required|max_length[250]');
        $this->form_validation->set_rules('txtdestination', 'Destination Address', 'trim|required|max_length[250]');
        $this->form_validation->set_rules('avail_seats', 'Avail Seats', 'trim|required|max_length[250]');

        if ($this->input->post('submit')) {


            $data['vechicletype'] = $this->input->post('vechicletype');
            $data['txtsource'] = $this->input->post('txtsource');
            $data['txtdestination'] = $this->input->post('txtdestination');
            $data['source_ids'] = $this->input->post('source_ids');
            $data['destination_ids'] = $this->input->post('destination_ids');
            $data['jquerytagboxtext'] = $this->input->post('jquerytagboxtext');
            $data['route_lanlat'] = $this->input->post('route_lanlat');
            $data['return'] = $this->input->post('return');
            $data['departure_time'] = $this->input->post('departure_time');
            $data['return_time'] = $this->input->post('return_time');
            $data['frequency_ids'] = $this->input->post('frequency_ids');
            $data['avail_seats'] = $this->input->post('avail_seats');
            $data['number'] = $this->input->post('number');
            $data['comments'] = $this->input->post('comments');
            $data['routes'] = $this->input->post('routes');
            $data['rpt_from_date'] = $this->input->post('rpt_from_date');
            $data['passenger_type'] = $this->input->post('passenger_type');
            $data['tripid'] = $trip_id;
            $data['fhh'] = $this->input->post('fhh');
            $data['thh'] = $this->input->post('thh');
            $data['fmm'] = $this->input->post('fmm');
            $data['fzone'] = $this->input->post('fzone');
            $data['tmm'] = $this->input->post('tmm');
            $data['tzone'] = $this->input->post('tzone');
            $data['vehnum'] = $this->input->post('vehnum');
            $data['routesdata'] = $this->input->post('routesdata');
            $data['frequency_values'] = json_encode(explode(',', str_replace('~', '', $this->input->post('frequency_ids'))));
        }
        if ($this->form_validation->run() == FALSE) {
            if ($ajax) {
                die(json_encode(array('result' => false, 'error' => validation_errors())));
            }
            $this->load->view('addtrip_individual', $data);
        } else {


            if ($this->input->post('tripid') != '') {
                $oldTripId = $this->input->post('tripid');
                $this->Trip_model->delete_trip_by_edit($oldTripId);
            }


            $source = $this->input->post('txtsource');
            $destination = $this->input->post('txtdestination');

            if($this->input->post('jquerytagboxtext')){
                $trip_routes = $source . '~' . $this->input->post('jquerytagboxtext') . '~' . $destination;
            }
            else{
                $trip_routes = $source .'~' . $destination;
            }            


            $save['trip_id'] = $this->trip_id;
            $save['trip_vehicle_id'] = $this->input->post('vechicletype');
            $save['trip_from_latlan'] = $this->input->post('source_ids');
            $save['trip_to_latlan'] = $this->input->post('destination_ids');
            $save['trip_routes_lat_lan'] = $this->input->post('source_ids') . ',' . $this->input->post('route_lanlat') . ',' . $this->input->post('destination_ids');

            $save['trip_routes'] = $trip_routes;
            $save['trip_return'] = $this->input->post('return');
            $save['source'] = $this->input->post('txtsource');
            $save['destination'] = $this->input->post('txtdestination');
            $save['route'] = $this->input->post('routes');
            $trip_depature_time = $this->input->post('fhh') . ':' . $this->input->post('fmm') . ' ' . $this->input->post('fzone');
            $save['trip_depature_time'] = date("H:i:s", strtotime($trip_depature_time));
            $save['trip_frequncy'] = $this->input->post('frequency_ids');
            $save['trip_avilable_seat'] = $this->input->post('avail_seats');
            $save['trip_comments'] = $this->input->post('comments');
            $save['flexibility'] = $this->input->post('flexibility');
            $save['detour'] = $this->input->post('detour');
            $save['luggage_size'] = $this->input->post('luggage_size');
            $save['trip_user_id'] = $this->user_id;
            if ($this->input->post('rpt_from_date') != '') {
                $save['trip_casual_date'] = date('Y/m/d', strtotime(str_replace("/", "-", $this->input->post('rpt_from_date'))));
            }
            $save['passenger_type'] = $this->input->post('passenger_type');
            $save['contact_person_number'] = $this->input->post('number');


            $trip_id = $this->Trip_model->save($save);
            /*Récupération du last ID après insertion*/
            $this->session->set_flashdata('trip_id', $trip_id);

            if ($this->input->post('return') == 'yes') {
                $return_destination = $this->input->post('txtsource');
                $return_source = $this->input->post('txtdestination');

                $return_trip_routes = $this->input->post('jquerytagboxtext');
                $return_trip_routes = explode('~', $return_trip_routes);
                $return_temp = array();
                for ($i = sizeof($return_trip_routes) - 1; $i >= 0; $i--) {

                    $return_temp[] = $return_trip_routes[$i];
                }
                $return_trip_routes = $return_temp;
                $return_trip_routes = implode('~', $return_trip_routes);
                $return_trip_routes = $return_source . '~' . $return_trip_routes . '~' . $return_destination;


                $return_trip_lat_lng = $this->input->post('route_lanlat');
                $return_trip_lat_lng = explode('~', $return_trip_lat_lng);
                $return_temp = array();
                for ($i = sizeof($return_trip_lat_lng) - 1; $i >= 0; $i--) {

                    $return_temp[] = $return_trip_lat_lng[$i];
                }
                $return_trip_lat_lng = $return_temp;
                $return_trip_lat_lng = implode('~', $return_trip_lat_lng);

                $return_route = $this->input->post('routes');
                $return_route = explode(',', $return_route);
                $return_temp = array();
                for ($i = sizeof($return_route) - 1; $i >= 0; $i--) {

                    $return_temp[] = $return_route[$i];
                }
                $return_route = $return_temp;
                $return_route = implode(',', $return_route);

                $param['trip_id'] = $this->trip_id;
                $param['trip_vehicle_id'] = $this->input->post('vechicletype');
                $param['trip_from_latlan'] = $this->input->post('destination_ids');
                $param['trip_to_latlan'] = $this->input->post('source_ids');
                $param['trip_routes_lat_lan'] = $this->input->post('destination_ids') . ',' . $return_trip_lat_lng . ',' . $this->input->post('source_ids');

                $param['trip_routes'] = $return_trip_routes;
                $param['trip_return'] = $this->input->post('return');
                $param['source'] = $this->input->post('txtdestination');
                $param['destination'] = $this->input->post('txtsource');
                $param['route'] = $return_route;
                $return_trip_depature_time = $this->input->post('thh') . ':' . $this->input->post('tmm') . ' ' . $this->input->post('tzone');
                $param['trip_depature_time'] = date("H:i", strtotime($return_trip_depature_time));
                $param['trip_frequncy'] = $this->input->post('frequency_ids');
                $param['trip_avilable_seat'] = $this->input->post('avail_seats');
                $param['trip_comments'] = $this->input->post('comments');
                $param['flexibility'] = $this->input->post('flexibility');
                $param['detour'] = $this->input->post('detour');
                $param['luggage_size'] = $this->input->post('luggage_size');
                $param['trip_user_id'] = $this->user_id;
                if ($this->input->post('rpt_from_date') != '') {
                    $param['trip_casual_date'] = date('Y/m/d', strtotime(str_replace("/", "-", $this->input->post('rpt_from_date'))));
                }
                $param['passenger_type'] = $this->input->post('passenger_type');
                $param['contact_person_number'] = $this->input->post('number');
                $return_trip_id = $this->Trip_model->save($param);
            }
//------------------------------------ trip leg concept ------------------------------------------------------------------------
            if (!empty($trip_id)) {

                if($this->input->post('route_lanlat')){
                    $route_lat = $this->input->post('source_ids') . ',' . $this->input->post('route_lanlat') . ',' . $this->input->post('destination_ids');
                }else{
                    $route_lat = $this->input->post('source_ids') . ',' . $this->input->post('destination_ids');
                }
                



                $route_lat = rtrim($route_lat, '~');
                $route_lat = explode('~,', $route_lat);

                $routes = explode('~', $trip_routes);
                $route_leg_array = array();
                for ($i = 0; $i < sizeof($routes); $i++) {
                    $single_route_latlng = ltrim($route_lat[$i], '~');
                    $single_route_latlng = explode(',', $single_route_latlng);
                    $route_leg_array[$i] = array('point' => $routes[$i], 'latitude' => $single_route_latlng[0], 'longitude' => $single_route_latlng[1]);
                }


                $trip_time[0] = $trip_depature_time;
                for ($i = 0; $i < sizeof($route_leg_array); $i++) {
                    if ($i != sizeof($route_leg_array) - 1) {
                        $trip_time[$i + 1] = $this->calculating_time($route_leg_array[$i]['latitude'], $route_leg_array[$i]['longitude'], $route_leg_array[$i + 1]['latitude'], $route_leg_array[$i + 1]['longitude'], $trip_time[$i]);
                    }
                }

                if ($trip_time[sizeof($trip_time) - 1]) {
                    $return_time = array();
                    $return_time['trip_id'] = $trip_id;
                    $return_time['trip_return_time'] = date("H:i:s", strtotime(end($trip_time)));
                    $this->Trip_model->save($return_time);
                }


                // insert route  leg data one by one 
                $i = 0;
                $j = 0;
                for ($i = 0; $i < sizeof($route_leg_array); $i++) {
                    for ($j = $i; $j < sizeof($route_leg_array); $j++) {
                        if ($route_leg_array[$i] != $route_leg_array[$j]) {
                            $legdata['trip_led_id'] = false;
                            $legdata['source_leg'] = $route_leg_array[$i]['point'];
                            $legdata['source_latitude'] = $route_leg_array[$i]['latitude'];
                            $legdata['source_longitude'] = $route_leg_array[$i]['longitude'];
                            $legdata['expected_time'] = $trip_time[$i];
                            $legdata['destination_leg'] = $route_leg_array[$j]['point'];
                            $legdata['destination_latitude'] = $route_leg_array[$j]['latitude'];
                            $legdata['destination_longitude'] = $route_leg_array[$j]['longitude'];
                            $legdata['trip_return'] = 0;
                            $legdata['trip_id'] = $trip_id;
                            $this->Trip_model->save_tripleg($legdata);
                        }
                    }
                }
            }

            if ($this->input->post('return') == 'yes' && !empty($return_trip_id)) {

                $return_route_lat = $this->input->post('destination_ids') . ',' . $return_trip_lat_lng . ',' . $this->input->post('source_ids');



                $return_route_lat = rtrim($return_route_lat, '~');
                $return_route_lat = explode('~,', $return_route_lat);

                $return_routes = explode('~', $return_trip_routes);
                $return_route_leg_array = array();
                for ($i = 0; $i < sizeof($return_routes); $i++) {
                    $return_single_route_latlng = ltrim($return_route_lat[$i], '~');
                    $return_single_route_latlng = explode(',', $return_single_route_latlng);
                    $return_route_leg_array[$i] = array('point' => $return_routes[$i], 'latitude' => $return_single_route_latlng[0], 'longitude' => $return_single_route_latlng[1]);
                }




                $return_trip_time = array();
                $return_trip_time[0] = $return_trip_depature_time;

                for ($i = 0; $i < sizeof($return_route_leg_array); $i++) {
                    if ($i != sizeof($return_route_leg_array) - 1) {
                        $return_trip_time[$i + 1] = $this->calculating_time($return_route_leg_array[$i]['latitude'], $return_route_leg_array[$i]['longitude'], $return_route_leg_array[$i + 1]['latitude'], $return_route_leg_array[$i + 1]['longitude'], $return_trip_time[$i]);
                    }
                }


                if ($return_trip_time[sizeof($return_trip_time) - 1]) {
                    $return_time = array();
                    $return_time['trip_id'] = $return_trip_id;
                    $return_time['trip_return_time'] = date("H:i", strtotime(end($return_trip_time)));
                    $this->Trip_model->save($return_time);
                }

                $i = 0;
                $j = 0;
                for ($i = 0; $i < sizeof($return_route_leg_array); $i++) {
                    for ($j = $i; $j < sizeof($return_route_leg_array); $j++) {
                        if ($return_route_leg_array[$i] != $return_route_leg_array[$j]) {
                            $legdata['trip_led_id'] = false;
                            $legdata['source_leg'] = $return_route_leg_array[$i]['point'];
                            $legdata['source_latitude'] = $return_route_leg_array[$i]['latitude'];
                            $legdata['source_longitude'] = $return_route_leg_array[$i]['longitude'];
                            $legdata['expected_time'] = $return_trip_time[$i];
                            $legdata['destination_leg'] = $return_route_leg_array[$j]['point'];
                            $legdata['destination_latitude'] = $return_route_leg_array[$j]['latitude'];
                            $legdata['destination_longitude'] = $return_route_leg_array[$j]['longitude'];
                            $legdata['trip_return'] = 1;
                            $legdata['trip_id'] = $return_trip_id;
                            $this->Trip_model->save_tripleg($legdata);
                        }
                    }
                }
            }

            if ($ajax) {
                $this->session->set_flashdata('message', 'Your Trip Has Been Added');
                die(json_encode(array('result' => true, 'message' => 'Your Trip Has Been Added')));
            }

            $this->session->set_flashdata('message', 'Your Trip Has Been Added');
            redirect('addtrip');
        }
    }

    // Fonction pour continuer l'ajout du trajet
    function step_2() {
        $last_trip_id =  $this->session->flashdata('trip_id');
        $data = array();
        $this->load->helper('form');
        $carpool_session['carpool_session'] = $this->CI->carpool_session->userdata('carpool');
        $id = $carpool_session['carpool_session']['user_id'];
        $this->user_id = $carpool_session['carpool_session']['user_id'];
        $data['symbol']  = $this->CI->config->item('currency_symbol');
        // $data = $this->Trip_model->get_trips($this->user_id, $data);
        $data['tripdetails'] = $this->Trip_model->get_tripdetail($last_trip_id);
        $data = $this->Trip_model->get_legs($last_trip_id, $this->user_id, $data);
        // $data['customer'] = $this->Customer_model->get_customer($id);
        // echo '<pre>';print_r($data);echo'</pre>';
           // die;
        $map = $this->Trip_model->getmap_details($last_trip_id);
        $this->load->library('googlemaps');
        $config['center'] = $map['origin'];
        $config['zoom'] = 'auto';
        $config['directions'] = TRUE;
        $config['directionsStart'] = $map['origin'];
        $config['directionsEnd'] = $map['destination'];
        $config['directionsWaypointArray'] = $map['route'];
        $config['map_height'] = '230px';
        $config['draggable'] = FALSE;
        $config['scrollwheel'] = FALSE;
    
    
        $this->googlemaps->initialize($config);
        $data['map'] = $this->googlemaps->create_map();


        $this->load->view('addtrip_individual_next', $data);
        
    }

    function get_vehiclenumber() {
        $vehiclenumber = $this->input->post('vid');
        $vehicle = $this->Trip_model->get_vehicle($vehiclenumber);
        if (!$vehicle) {
            die(json_encode(array('result' => false)));
        } else {
            die(json_encode(array('result' => true, 'vnum' => $vehicle->vechicle_number)));
        }
    }

    function route_map($ajax = false) {
        $routedata = $this->input->post('route');
        $source = $this->input->post('source');
        $destination = $this->input->post('desti');
        $route_array = array();

        $routes = explode('~', $routedata);
        for ($i = 0; $i < sizeof($routes); $i++) {

            $single_route = explode('-', $routes[$i]);
            $route_array[] = $single_route[0];
        }


        $this->load->library('googlemaps');
        $config['center'] = $source;
        $config['zoom'] = 'auto';
        $config['directions'] = TRUE;
        $config['loadAsynchronously'] = TRUE;
        $config['directionsStart'] = $source;
        $config['directionsEnd'] = $destination;
        if ($routedata != '' && $routedata != '~') {
            $config['directionsWaypointArray'] = $route_array;
        }
        $config['map_height'] = '400px';

        $config['draggable'] = FALSE;
        $config['scrollwheel'] = FALSE;

        $this->googlemaps->initialize($config);
        $data['map'] = $this->googlemaps->create_map();

        $this->load->view('route_map', $data);
    }

    function update_rate($ajax = false) {
        $trip_leg_id = $this->input->post('lid');
        $trip_leg_rate = $this->input->post('rate');
        if ($trip_leg_id != '' && $trip_leg_rate != '') {
            $leg_details = (array) $this->Trip_model->get_legdetails($trip_leg_id);
            if (!empty($leg_details)) {
                $leg_details['route_rate'] = $trip_leg_rate;
                $this->Trip_model->save_tripleg($leg_details);
                die(json_encode(array('result' => true, 'rate' => $trip_leg_rate)));
            } else {
                die(json_encode(array('result' => false, 'message' => 'Invalid leg details')));
            }
        } else {
            die(json_encode(array('result' => false, 'message' => 'please enter valid rate')));
        }
    }

    /* Mettre à jour la le trajet pour le mettre en public afin de le publier*/
    function publish_trip($ajax = false) {
        $trip_id = $this->input->post('trip_id');
        $trip_public = $this->input->post('trip_public');

                $data['trip_public'] = $trip_public;
                $this->Trip_model->publish_trip($data);      
               
    }

    function update_time($ajax = false) {
        $trip_leg_id = $this->input->post('lid');
        $trip_leg_time = $this->input->post('time');
        if ($trip_leg_id != '' && $trip_leg_time != '') {
            $leg_details = (array) $this->Trip_model->get_legdetails($trip_leg_id);
            if (!empty($leg_details)) {
                $leg_details['expected_time'] = $trip_leg_time;
                $this->Trip_model->save_tripleg($leg_details);
                die(json_encode(array('result' => true, 'time' => $trip_leg_time)));
            } else {
                die(json_encode(array('result' => false, 'message' => 'Invalid leg details')));
            }
        } else {
            die(json_encode(array('result' => false, 'message' => 'please enter expected time')));
        }
    }

    function delete($id = 0) {
        if ($id) {
            $this->db->where('trip_id', $id);
            $this->db->delete('tbl_trips');
            $this->session->set_flashdata('message', 'Your trip has been deleted');
            redirect('addtrip');
        }
    }

    function check() {


        $vechicle_id = $this->input->post('vid');
        $frequency = $this->input->post('frequency');
        $time = $this->input->post('time');
        $totime = $this->input->post('t_time');
        $date = $this->input->post('date');
        $param['tripid'] = $this->input->post('tid');
        $param['vechicle_id'] = $vechicle_id;
        $param['time'] = date("H:i:s", strtotime($time));
        $param['frequency'] = $frequency;
        $param['date'] = '';
        $param['date_frequency'] = '';
        if (!empty($date)) {
            $date_frequency = date("w", strtotime(str_replace("/", "-", $date)));
            $param['date'] = date('Y/m/d', strtotime(str_replace("/", "-", $date)));

            $param['date_frequency'] = $date_frequency;
        }
        $return_flg = $this->input->post('return_flg');
        if ($this->Trip_model->check_trip($param)) {
            die(json_encode(array('result' => false, 'message' => 'already you have trip in same time')));
        } else if ($return_flg == 'yes') {
            $param['time'] = date("H:i:s", strtotime($totime));
            if ($this->Trip_model->check_trip($param)) {
                die(json_encode(array('result' => false, 'message' => 'already you have same trip in return journey')));
            }
        }
        die(json_encode(array('result' => true)));
    }

    function calculating_time($source_lat, $source_lng, $destination_lat, $destination_lng, $last_time) {
        $speed = 80;
        $distance = $this->distance($source_lat, $source_lng, $destination_lat, $destination_lng, "K");

        $time = $distance / $speed;

        $travel_time = $time * 60;
        $startTime = strtotime($last_time);
        $endTime = date("H:i a", strtotime("+" . round($travel_time) . "minutes", $startTime));
        return $endTime;
    }

    function distance($lat1, $lon1, $lat2, $lon2, $unit) {

        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            $distance = round(($miles * 1.609344));

            if ((string) $distance == "NAN") {
                $distance = 0;
            }
            return $distance;
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }

    function enquery_list() {

        $data = array();
        $carpool_session['carpool_session'] = $this->CI->carpool_session->userdata('carpool');
        $this->user_id = $carpool_session['carpool_session']['user_id'];
        $data['enquiries'] = $this->Enquiry_model->get_enquires_list($this->user_id);
        $data['user']= $carpool_session['carpool_session']['user_id'];
    // echo '<pre>';print_r($data['user']);echo'</pre>';exit;
        $id = $carpool_session['carpool_session']['user_id'];  
        $data['customer'] = $this->Customer_model->get_customer($id);
        $this->load->view('enquery_list', $data);
    }
    
    function enquiryaction(){
        
        $enquiryId = $this->input->post('enquiryId');
        $action = $this->input->post('action');
        $enquiryDetails = $this->Enquiry_model->get_enquiries($enquiryId);
        if($enquiryDetails){
            $travaller = $this->Customer_model->get_customer($enquiryDetails->enquire_travel_id);
                        $passanger = $this->Customer_model->get_customer($enquiryDetails->enquiry_passanger_id);
                        
                        $name = $passanger->user_first_name . ' ' . $passanger->user_last_name;
                        $passanger_email = $passanger->user_email;

                        $traveller_name = $travaller->user_first_name . ' ' . $travaller->user_last_name;
                        $traveller_email = $travaller->user_email;
                        $traveller_mobile = $travaller->user_mobile;
                        
                        $edata['passanger_name']   = $name;
                        $edata['passanger_email']  = $passanger_email;
                        $edata['traveller_name']   = $traveller_name;
                        $edata['traveller_email']  = $traveller_email;
                        $edata['traveller_mobile'] = $traveller_mobile; 
            switch($action){
                
                case 'accept':                
                    $checkAvailableSeat = $this->Enquiry_model->checkAvailableSeat($enquiryDetails->enquiry_trip_date,$enquiryDetails->enquiry_trip_id,$enquiryId);
                    if($checkAvailableSeat){
                        $save['enquiry_trip_status'] = 1;
                        $save['enquiry_id'] = $enquiryId;
                        $this->Enquiry_model->save_enquiry($save);
            
                        $this->tripowner($edata);

                        die(json_encode(array('result'=>true,'message'=>'success')));
                        }
                        else{
                         die(json_encode(array('result'=>false,'message'=>'No available seats'))); 
                        }
                    break;
                case 'reject':
                       $this->Enquiry_model->delete($enquiryId);
                    
                       $this->tripownerreject($edata);
                       
                       die(json_encode(array('result'=>true,'message'=>'success')));
                    break;            
                    }
        }else{
            die(json_encode(array('result'=>false,'message'=>'Invalid Enquiry Details')));
        }
        
        
    }
    
    function tripowner($edata) {
       
        $res = $this->db->where('tplid', '30')->get('tbl_email_template');
        $row = $res->row_array();

        $row['tplsubject'] = str_replace('{COMPANY_NAME}', $this->config->item('company_name'), $row['tplsubject']);

        $row['tplmessage'] = str_replace('{NAME}', $edata['passanger_name'], $row['tplmessage']);

        $row['tplmessage'] = str_replace('{TNAME}', $edata['traveller_name'], $row['tplmessage']);

        $row['tplmessage'] = str_replace('{TEMAIL}', $edata['traveller_email'], $row['tplmessage']);

        $row['tplmessage'] = str_replace('{TMOBILE}', $edata['traveller_mobile'], $row['tplmessage']);

        $row['tplmessage'] = str_replace('{COMPANY_NAME}', $this->config->item('company_name'), $row['tplmessage']);


        $param['message'] = $row['tplmessage'];


        $email_subject = $this->load->view('template', $param, TRUE);


        $this->load->library('email');

        $config['mailtype'] = 'html';

        $this->email->initialize($config);

        $this->email->from($this->config->item('email'), $this->config->item('company_name'));
        $this->email->to($edata['passanger_email']);
        $this->email->bcc($this->config->item('email'));
        $this->email->subject($row['tplsubject']);
        $this->email->message(html_entity_decode($email_subject));
        $this->email->send();
    }
    
    function tripownerreject($edata) {
       
        $res = $this->db->where('tplid', '31')->get('tbl_email_template');
        $row = $res->row_array();

        $row['tplsubject'] = str_replace('{COMPANY_NAME}', $this->config->item('company_name'), $row['tplsubject']);

        $row['tplmessage'] = str_replace('{NAME}', $edata['passanger_name'], $row['tplmessage']);
        
        $row['tplmessage'] = str_replace('{LINK}',  $this->config->item('base_url'), $row['tplmessage']);

        $row['tplmessage'] = str_replace('{COMPANY_NAME}', $this->config->item('company_name'), $row['tplmessage']);
        
        $param['message'] = $row['tplmessage'];


        $email_subject = $this->load->view('template', $param, TRUE);


        $this->load->library('email');

        $config['mailtype'] = 'html';

        $this->email->initialize($config);

        $this->email->from($this->config->item('email'), $this->config->item('company_name'));
        $this->email->to($edata['passanger_email']);
        $this->email->bcc($this->config->item('email'));
        $this->email->subject($row['tplsubject']);
        $this->email->message(html_entity_decode($email_subject));
        $this->email->send();
    }

    function enquery() {

        $data = array();
        $carpool_session['carpool_session'] = $this->CI->carpool_session->userdata('carpool');
        $this->user_id = $carpool_session['carpool_session']['user_id'];
        $data['enquiries'] = $this->Enquiry_model->get_enquires_list($this->user_id);
        $this->load->view('enquiries', $data);
    }

    function past_trip() {

        $data = array();
        $this->load->helper('form');
        $carpool_session['carpool_session'] = $this->CI->carpool_session->userdata('carpool');
        $this->user_id = $carpool_session['carpool_session']['user_id'];
        $id = $carpool_session['carpool_session']['user_id'];
        $data = $this->Trip_model->past_trip($this->user_id, $data);
        $data['customer'] = $this->Customer_model->get_customer($id);
        $this->load->view('past_trip', $data);
    }

    function upcoming_trip() {

        $data = array();
        $this->load->helper('form');
        $carpool_session['carpool_session'] = $this->CI->carpool_session->userdata('carpool');
        $id = $carpool_session['carpool_session']['user_id'];
        $this->user_id = $carpool_session['carpool_session']['user_id'];
        $data = $this->Trip_model->get_trips($this->user_id, $data);
        $data['customer'] = $this->Customer_model->get_customer($id);
        $this->load->view('trips', $data);
    }

      
    function upcoming_trip_passenger() {

        $data = array();
        $this->load->helper('form');
        $carpool_session['carpool_session'] = $this->CI->carpool_session->userdata('carpool');
        $this->user_id = $carpool_session['carpool_session']['user_id'];
        $id = $carpool_session['carpool_session']['user_id'];
        $data = $this->Trip_model->get_trips_passenger($this->user_id, $data);
        $data['customer'] = $this->Customer_model->get_customer($id);
        $this->load->view('trips_passenger', $data);
    }
    
    function past_trip_passenger() {

        $data = array();
        $this->load->helper('form');
        $carpool_session['carpool_session'] = $this->CI->carpool_session->userdata('carpool');
        $this->user_id = $carpool_session['carpool_session']['user_id'];
        $id = $carpool_session['carpool_session']['user_id'];
        $data = $this->Trip_model->past_trip_passenger($this->user_id, $data);
        $data['customer'] = $this->Customer_model->get_customer($id);
        $this->load->view('past_trip_passenger', $data);
    }

    function rating() {

        $this->load->view('rating');
    }

}

?>