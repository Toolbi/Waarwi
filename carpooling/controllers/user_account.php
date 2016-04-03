<?php

class User_account extends Traveller_Controller 
{

    var $CI;
    var $user_id;

    function __construct() 
	{
        parent::__construct();

        $this->CI = & get_instance();

        $this->load->helper('form');
        $this->load->helper('date');
        $this->load->model('Customer_model');
        $this->load->model('vechicle_model');
        $this->lang->load('backend');
        $this->load->helper('url');
    }

    function index() 
	{
        $carpool_session['carpool_session'] = $this->CI->carpool_session->userdata('carpool');
        $id = $carpool_session['carpool_session']['user_id'];
        $data['customer'] = $this->Customer_model->get_customer($id);
        $data['vechicletypes'] = $this->vechicle_model->getvechicle_list($id);


        $data['seo_title'] = 'Edit - Company Details';
        $data['seo_description'] = '';
        $data['seo keyword'] = '';


        $data['number'] = '';
        $data['sms'] = '';

        $data['txtfirstname'] = '';
        $data['txtlastname'] = '';
        $data['txtemail'] = '';
        $data['txtphone'] = '';
        $data['txtgender'] = '';
        $data['atxtemail'] = '';
        $data['atxtphone'] = '';
        $data['mobile_flg'] = '';
        $data['mail_flg'] = '';
        $data['txtstreet'] = '';
        $data['txtcity'] = '';
        $data['txtcode'] = '';
        $data['txtcountry'] = '';
        $data['txtoccupation'] = '';
        $data['month'] = '';
        $data['selday'] = '';
        $data['year'] = '';
        $data['martial_status'] = '';
        ;
        $data['txtcmpname'] = '';
        $data['txturl'] = '';
        $data['number'] = '';
        $data['sms'] = '';
        $data['food'] = '';
        $data['pet'] = '';
        $data['smoke'] = '';
        $data['chat'] = '';
        $data['music'] = '';
     
	 

        $data['redirect'] = '';

        if ($id) 
		{

            $user_account = $this->Customer_model->get_customer($id);
            if (!$user_account) 
			{
                $this->session->set_flashdata('error', lang('error_not_found'));
                redirect('user_account');
            }


            //set values to db values
            $data['id'] = $id;
            $data['txtfirstname'] = $user_account->user_first_name;
            $data['txtlastname'] = $user_account->user_last_name;
            $data['txtphone'] = $user_account->user_mobile;
            $data['txtemail'] = $user_account->user_email;
            $data['txtgender'] = $user_account->user_gender;
            $data['mail_flg'] = $user_account->communication_email;
            $data['txtaboutus'] = $user_account->user_about_us;
            $data['atxtemail'] = $user_account->user_secondary_mail;
            $data['number'] = $user_account->show_number;
            $data['sms'] = $user_account->send_sms;
            $data['food'] = $user_account->allowed_food;
            $data['pet'] = $user_account->allowed_pet;
            $data['smoke'] = $user_account->allowed_smoke;
            $data['chat'] = $user_account->allowed_chat;
            $data['music'] = $user_account->allowed_music;

            if (!empty($user_account->user_dob)) 
			{
                $dob = explode("-", $user_account->user_dob);

                $data['month'] = date("F", strtotime($user_account->user_dob));
                $data['year'] = $dob[0];
                $data['selday'] = $dob[2];
            }
        }
		

        $this->load->view('user_account', $data);
    }

    function edit($id = false, $duplicate = false) 
	{
        $this->user_id = $id;
        $data['customer'] = $this->Customer_model->get_customer($this->user_id);

        $data['txtfirstname'] = '';
        $data['txtlastname'] = '';
        $data['txtemail'] = '';
        $data['txtphone'] = '';
        $data['txtgender'] = '';
        $data['atxtemail'] = '';
        $data['atxtphone'] = '';
        $data['mobile_flg'] = '';
        $data['mail_flg'] = '';
        $data['txtstreet'] = '';
        $data['txtcity'] = '';
        $data['food'] = '';
        $data['pet'] = '';
        $data['smoke'] = '';
        $data['chat'] = '';
        $data['music'] = '';

        $data['month'] = '';
        $data['selday'] = '';
        $data['year'] = '';

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('', '');
		
		

        $data['redirect'] = '';
        if ($this->user_id) 
		{

            $user_account = $this->Customer_model->get_customer($this->user_id);
            if (!$user_account) 
			{

                $this->session->set_flashdata('error', lang('error_not_found'));
                redirect('user_account');
            }


            //set values to db values
            $data['id'] = $id;
            $data['txtfirstname'] = $user_account->user_first_name;
            $data['txtlastname'] = $user_account->user_last_name;
            $data['txtphone'] = $user_account->user_mobile;
            $data['txtemail'] = $user_account->user_email;
            $data['txtgender'] = $user_account->user_gender;
            $data['mail_flg'] = $user_account->communication_email;
            $data['txtaboutus'] = $user_account->user_about_us;
            $data['atxtemail'] = $user_account->user_secondary_mail;
            $data['number'] = $user_account->show_number;
            $data['sms'] = $user_account->send_sms;
            $data['food'] = $user_account->allowed_food;
            $data['pet'] = $user_account->allowed_pet;
            $data['smoke'] = $user_account->allowed_smoke;
            $data['chat'] = $user_account->allowed_chat;
            $data['music'] = $user_account->allowed_music;

            if (!empty($user_account->user_dob)) 
			{
                $dob = explode("-", $user_account->user_dob);
                //print_r($dob[1]);
                //die;
                $data['month'] = date("F", strtotime($user_account->user_dob));
                $data['year'] = $dob[0];
                $data['selday'] = $dob[2];
            }


            if ($this->input->post('mail_flg') == 1) 
			{
                $this->form_validation->set_rules('atxtemail', 'Official Email', 'trim|required|max_length[32]');
            }
        }

        $this->form_validation->set_rules('txtfirstname', 'Firstname', 'trim|required|min_length[3]|max_length[128]');
        $this->form_validation->set_rules('txtlastname', 'Lastname', 'trim|required|min_length[3]|max_length[128]');

        $this->form_validation->set_rules('txtphone', 'Primary mobile', 'trim|required|max_length[15]|min_length[3]|numeric');
		$this->form_validation->set_rules('day', 'D.O.B', 'required');
		$this->form_validation->set_rules('month', 'D.O.B', 'required');
		$this->form_validation->set_rules('year', 'D.O.B', 'required');
		



        if ($duplicate) 
		{
            $data['id'] = false;
        }


        if ($this->form_validation->run() == FALSE) 
		{

            $this->load->view('user_account', $data);
        } 
		else 
		{
            $this->load->helper('text');



            if ($this->input->post('year') && $this->input->post('month') && $this->input->post('day')) 
			{
                $enrolled = sprintf('%d-%02d-%02d', $this->input->post('year'), date("m", strtotime($this->input->post('month'))), $this->input->post('day'));
            } 
			else 
			{
                $enrolled = '';
            }

            $save['user_id'] = $this->user_id;
            $save['user_first_name'] = $this->input->post('txtfirstname');
            $save['user_last_name'] = $this->input->post('txtlastname');
            if (empty($user_account->user_email))
			 {
                $save['user_email'] = $this->input->post('txtemail');
            }
           
            $save['user_mobile'] = $this->input->post('txtphone');
            $save['user_secondary_mail'] = $this->input->post('atxtemail');
            $save['user_gender'] = $this->input->post('txtgender');
            $save['communication_email'] = $this->input->post('mail_flg');
            $save['user_dob'] = $enrolled;
            $save['user_about_us'] = $this->input->post('txtaboutus');




            // save password 
            $profile_id = $this->Customer_model->save($save);



            $this->session->set_flashdata('message', 'Your user_account has been updated.');
            redirect('user_account#personal-info');
        }
    }

    function changepwd_form($id = false, $duplicate = false) 
	{
        $this->user_id = $id;

        if (!$id) 
		{
            $carpool_session['carpool_session'] = $this->CI->carpool_session->userdata('carpool');
            $this->user_id = $carpool_session['carpool_session']['user_id'];
        }


        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('', '');

        $data['redirect'] = '';
        if ($this->user_id) 
		{

            $user_account = $this->Customer_model->get_customer($this->user_id);
            if (!$user_account) 
			{

                $this->session->set_flashdata('error', lang('error_not_found'));
                redirect('user_account/change_password');
            }


            //set values to db values
            $data['id'] = $this->user_id;

            //make sure we haven't submitted the form yet before we pull in the images/related products from the database
        }

        $this->form_validation->set_rules("txtnewpwd", "New Password", "trim|required|matches[txtcnewpwd]");
        $this->form_validation->set_rules("txtoldpwd", "Old Password", "trim|required|callback_passwordCheck");


        if ($duplicate) 
		{
            $data['id'] = false;
        }


        if ($this->form_validation->run() == FALSE) 
		{

            $this->load->view('change_password', $data);
        } 
		else 
		{
            $this->load->helper('text');
			
            $save['user_id'] = $this->user_id;
            $save['user_password '] = sha1($this->input->post('txtnewpwd'));

            // save password 
            $profile_id = $this->Customer_model->save($save);

            $this->session->set_flashdata('message', 'Your password has been changed');

            redirect('user_account/changepwd_form');
        }
    }

    function profile_image_upload() 
	{

        $carpool_session['carpool_session'] = $this->CI->carpool_session->userdata('carpool');
        $id = $carpool_session['carpool_session']['user_id'];


        $filename = $_FILES['profileimg']['name'];
        $size = $_FILES['profileimg']['size'];


        //get the extension of the file in a lower case format
        $ext = $this->getExtension($filename);
        $ext = strtolower($ext);
        $actual_image_name = 'user' . $id . '_profile_' . time() . "." . $ext;

        //config image upload  
        $config['allowed_types'] = $this->config->item('acceptable_files');
        $config['upload_path'] = $this->config->item('profile_upload_dir') . 'original';
        $config['file_name'] = $actual_image_name;
        $config['remove_spaces'] = true;


        $this->load->library('upload', $config);

        if ($this->upload->do_upload('profileimg')) 
		{
            $upload_data = $this->upload->data();


            $this->load->library('image_lib');
            //this is the larger image
            $config['image_library'] = 'gd2';
            $config['source_image'] = $this->config->item('profile_upload_dir') . 'original/' . $upload_data['file_name'];
            $config['new_image'] = $this->config->item('profile_upload_dir') . 'source/' . $upload_data['file_name'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 160;
            $config['height'] = 204;
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data['file_name'] = $upload_data['file_name'];


            $param['user_profile_img'] = $data['file_name'];
            $param['user_id'] = $id;
            $uid = $this->Customer_model->save($param);
            if ($uid) 
			{

                echo '<img src="' . theme_profile_img($upload_data['file_name']) . '"  width="100" height="100"  style="top:0px"/>';
            }
        }

        if ($this->upload->display_errors() != '') 
		{
            echo $this->upload->display_errors();
        }
    }

    function getExtension($str) 
	{
        $i = strrpos($str, ".");
        if (!$i) 
		{
            return "";
        }

        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    function settings($id = false) 
	{
        $this->user_id = $id;

        if (!$id) 
		{
            $carpool_session['carpool_session'] = $this->CI->carpool_session->userdata('carpool');
            $this->user_id = $carpool_session['carpool_session']['user_id'];
        }


        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('', '');

        $data['redirect'] = '';
        if ($this->user_id) 
		{

            $user_account = $this->Customer_model->get_customer($this->user_id);
            if (!$user_account) 
			{

                $this->session->set_flashdata('error', lang('error_not_found'));
                redirect('user_account#settings');
            }


            //set values to db values
            $data['id'] = $this->user_id;
            $data['number'] = $user_account->show_number;
            $data['sms'] = $user_account->send_sms;
            $data['food'] = $user_account->allowed_food;
            $data['pet'] = $user_account->allowed_pet;
            $data['smoke'] = $user_account->allowed_smoke;
            $data['chat'] = $user_account->allowed_chat;
            $data['music'] = $user_account->allowed_music;
            //make sure we haven't submitted the form yet before we pull in the images/related products from the database
        }

        $this->form_validation->set_rules("number", "Show Number", "trim");
        $this->form_validation->set_rules("sms", "Send Sms", "trim");


        if ($this->form_validation->run() == FALSE) 
		{
            $this->session->set_flashdata('error', validation_errors());
            redirect('user_account#settings');
        } 
		else 
		{
            $this->load->helper('text');

            $save['user_id'] = $this->user_id;
            $save['show_number '] = $this->input->post('number');
            $save['send_sms '] = $this->input->post('sms');
            $save['allowed_food'] = $this->input->post('food');
            $save['allowed_pet'] = $this->input->post('pet');
            $save['allowed_smoke'] = $this->input->post('smoke');
            $save['allowed_chat'] = $this->input->post('chat');
            $save['allowed_music'] = $this->input->post('music');
            //print_r($save); die();
            $profile_id = $this->Customer_model->save($save);
            //print_r($profile_id); die();
            $this->session->set_flashdata('message', 'Your setting changed');

            redirect('user_account#settings');
        }
    }

    function passwordCheck() 
	{
        $carpool_session['carpool_session'] = $this->CI->carpool_session->userdata('carpool');
        $this->user_id = $carpool_session['carpool_session']['user_id'];
        $md5pass = sha1($this->input->post('txtoldpwd'));

        $user_account = $this->Customer_model->get_customer($this->user_id);
        $currentPass = $user_account->user_password;

        if ($md5pass == $currentPass) 
		{
            return true;
        } 
		else 
		{
            $this->form_validation->set_message('passwordCheck', 'Invalid current password, please try again');
            return false;
        }
    }

}

?>