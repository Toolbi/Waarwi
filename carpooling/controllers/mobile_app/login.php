<?php

class Login extends Front_Controller {

    function __construct() {
        parent::__construct();

        $this->load->library('Auth_travel');
        $this->load->library('OAuth2');
        //$this->lang->load('login');
        $this->load->model('travel_model');
        $this->load->helper('url');
    }

	function index() {
		echo "<h1> Hello ! </h1>";
		$travellers = $this->travel_model->get_alltravellers();
		print_r(json_encode($travellers));
	}
	
    function loginvalidated($ajax = false) {
       
    }

    function logout() {
        $this->auth_travel->logout();

        //when someone logs out, automatically redirect them to the login page.
        $this->session->set_flashdata('message', lang('message_logged_out'));
        
    }

    function forget_password() {
        
    }

    function send_password($ajax = false) {

      
    }

    public function facebooklogin() {

       
    }

    public function googlelogin() {

       
    }

    function check_mail($profile) {
        $this->load->library('session');
        if (!empty($profile['email'])) {
            $this->db->select('*');
            $this->db->from('tbl_users');
            $this->db->where('user_email', $profile['email']);
            $this->db->limit(1);
            $result = $this->db->get();
            $result = $result->row_array();

            if (sizeof($result) > 0) {
               
                return $result['user_id'];
            } else {
                $this->load->helper('string');
                $password = random_string('alnum', 6);

                $save['user_email'] = $profile['email'];
                $save['user_password'] = sha1($password);
                $save['user_first_name'] = $profile['first_name'];
                $save['user_last_name'] = $profile['last_name'];
                $save['user_last_name'] = $profile['last_name'];
                $save['isactive'] = 1;
                $save['user_admin_status'] = 1;

                $this->db->insert('tbl_users', $save);
                $user_id = $this->db->insert_id();


///*			// send an email */
////			// get the email template
                $res = $this->db->where('tplid', '12')->get('tbl_email_template');
                $row = $res->row_array();

                // set replacement values for subject & body
                // {customer_name}
                $row['tplmessage'] = str_replace('{NAME}', $profile['first_name'] . '.' . $profile['last_name'], $row['tplmessage']);

                $row['tplmessage'] = str_replace('{EMAIL}', $save['user_email'], $row['tplmessage']);

                $row['tplmessage'] = str_replace('{IP}', $this->input->ip_address(), $row['tplmessage']);

                // {url}
                $row['tplmessage'] = str_replace('{PASSWORD}', $password, $row['tplmessage']);

                $param['message'] = $row['tplmessage'];

                $email_subject = $this->load->view('template', $param, TRUE);

                $this->load->library('email');

                $config['mailtype'] = 'html';

                $this->email->initialize($config);

                $this->email->from($this->config->item('email'), $this->config->item('company_name'));
                $this->email->to($save['user_email']);
                $this->email->bcc($this->config->item('email'));
                $this->email->subject($row['tplsubject']);
                $this->email->message(html_entity_decode($email_subject));

                $this->email->send();

                return $user_id;
            }
        } else {
            $this->session->set_flashdata('error', 'Unable to login');
            //redirect('login');
        }
    }

}

?>
