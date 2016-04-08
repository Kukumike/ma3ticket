<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->load->view('welcome_message');
    }

    //Login view
    function login() {

        $loginData = array(
            'activationMessage' => ""
        );

        $this->load->view('login', $loginData);
    }

    //login on activation
    function verification_login() {

        $loginData = array(
            'activationMessage' => "Verification successful. Now login"
        );

        $this->load->view('login', $loginData);
    }

    //Sign up view
    function signup() {
        $signupData = array(
            'oopName' => "",
            'oopMail' => "",
            'error_hide' => "hidden",
            'success_hide' => "hidden"
        );
        $this->load->view('signup', $signupData);
    }

    //redirect on signup success
    function signup_success() {
        $signupData = array(
            'oopName' => "",
            'oopMail' => "",
            'error_hide' => "hidden",
            'success_hide' => "visible"
        );
        $this->load->view('signup', $signupData);
    }

    //redirect on signup error
    function signup_error() {
        $signupData = array(
            'oopName' => "",
            'oopMail' => "",
            'error_hide' => "visible",
            'success_hide' => "hidden"
        );
        $this->load->view('signup', $signupData);
    }

    //signup functions
    function signupCompany() {

        //get feedback and submit data first
        $operatorName = $_POST['opp_name'];
        $operatorMail = $_POST['opp_mail'];
        $operatorPassword = $_POST['opp_pass'];

        //validate submitted data
        $this->form_validation->set_rules('opp_name', 'Company name', "trim|required|is_unique[OPERATOR.operatorName]");
        $this->form_validation->set_rules('opp_mail', 'Your email', 'trim|required|is_unique[OPERATOR.operatorMail]');
        $this->form_validation->set_rules('opp_pass', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('opp_pass_con', 'Confirm password', 'matches[opp_pass]');

        $validationState = $this->form_validation->run();


        //if statements for the validation errors and success
        if ($validationState == FALSE) {

            //redirect to sign with errors
            $signupData = array(
                'oopName' => $operatorName,
                'oopMail' => $operatorMail,
                'error_hide' => "hidden",
                'success_hide' => "hidden"
            );

            $this->load->view('signup', $signupData);
        } else {
            //call signup model
            $success_signup = $this->Operator->operator_signup($operatorName, $operatorMail, $operatorPassword);
            if ($success_signup) {

                //send verification email
                //$this->email->from('noreply@vukatrip.com', 'SanQuicker');
                //$this->email->to($operatorMail);
                //$this->email->subject("Verify your email");
                //$this->email->set_mailtype("html");
                //$this->email->message('<div style="padding: 5px">
                //<p style="margin-top: 10px; color: #4C4C4C;">Hello' . $operatorName . ',<br/> Click the link below to verify your email </p>
                //<div style="text-align: left; margin-top: 30px; margin-bottom: 30px;">
                //<a href="' . base_url("verify/" . do_hash($operatorMail)) . '" style="color: #ff5a00; text-decoration-none;">Finish signup</a>
                //</div>
                //<p>Thanks,</p>
                //<p>ma3ticket team.</p>
                //</div>');
                //$this->email->send();
                //redirect to success page
                redirect("redirectsuc");
            } else {

                redirect("redirecterr");
            }
        }
    }

    //activate account 
    function activate_account($verificationId) {

        //Call activation model function
        $activationProcess = $this->Operator->activate_account($verificationId);
        if ($activationProcess) {

            //load login on activation
            redirect('verifiedLogin');
        } else {

            //redirect to signup error
            redirect('redirecterr');
        }
    }

    //Login auth
    function auth_login() {

        $this->form_validation->set_rules('opp_mail', 'Email', 'trim|required');
        $this->form_validation->set_rules('opp_pass', 'Password', 'trim|required|callback_check_login_data');

        if ($this->form_validation->run() == FALSE) {

            //Field & db validation failed redirected to login page            
            $loginData = array(
                'activationMessage' => ""
            );

            $this->load->view('login', $loginData);
        } else {
            //Go to doctor admin area
            redirect('op', 'refresh');
        }
    }

    //Verify login details
    function check_login_data($opp_pass) {
        //Field validation succeeded validate against database
        $operatorMail = $this->input->post('opp_mail');

        //query the operator database
        $queryResult = $this->Operator->login($operatorMail, $opp_pass);
        if ($queryResult) {
            $session_array = array();
            foreach ($queryResult as $row) {
                $session_array = array(
                    'operatorId' => $row->operatorId
                );
                $this->session->set_userdata('logged_in', $session_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_login_data', 'Wrong email or password or inactive account');
            return false;
        }
    }

    //searching
    function search() {

        $from = $_GET['destinationFrom'];
        $to = $_GET['destinationTo'];
        $travel_date = $_GET['travelDate'];

        $data = array(
            'from' => $from,
            'to' => $to,
            'travel_date' => $travel_date,
            'search_result' => $this->Search->search_all($from, $to, $travel_date),
            'num_search_result' => $this->Search->num_search_all($from, $to, $travel_date)
        );

        $this->load->view('search', $data);
    }

    //ticket load
    function ticket() {
        $sId = $_GET['scheduleId'];
        $fair = $_GET['scheduleBusCost'];
        $capacity = $_GET['scheduleBusCapacity'];
        $operatorId = $_GET['operatorId'];

        $data = array(
            'ticket_data' => $this->Ticket->db_search($sId, $fair, $capacity, $operatorId)
        );


        $this->load->view('ticket', $data);
    }

    //save ticket details...
    function ticket_success() {

        $customerName = $_POST['inputName'];
        $customerId = $_POST['inputiD'];
        $customerPhone = $_POST['inputPhone'];
        $inputBus = $_POST['inputBus'];
        $inputFrom = $_POST['inputFrom'];
        $inputTo = $_POST['inputTo'];
        $inputDate = $_POST['inputDate'];
        $inputTime = $_POST['inputTime'];
        $inputSeats = $_POST['inputSeats'];
        $inputCost = $_POST['inputCost'];
        $operatorId = $_POST['operatorId'];
        $scheduleBusCost = $_POST['scheduleBusCost'];
        $scheduleId = $_POST['scheduleId'];
        $busCapacity = $_POST['capacity'];

        //insert function
        $insert_ticket_details = $this->Ticket->db_submit($customerName, $customerId, $customerPhone, $inputBus, $inputFrom, $inputTo, $inputDate, $inputTime, $inputSeats, $inputCost, $operatorId, $scheduleBusCost);
        //search details by name of customer
        $customer = $_POST['inputName'];
        $search_customer = array(
            'search_result' => $this->Ticket->ticketDetails($customer)
        );
        
        //update the database table opertorshedule
        $update_capacity = $this->Ticket->db_update($scheduleId, $busCapacity, $inputSeats);

        //redirect  to...
        if ($insert_ticket_details) {
            $this->load->view('success\ticket_view', $search_customer);
        } else {
            echo "error in inserting data in database";
        }
    }

    //display the ticket
    /* function ticket_display() {
      $inputId = $this->db->select('*');
      $this->db->where('scheduleFrom', $from);
      $this->db->where('scheduleTo', $to);
      $this->db->where('scheduleDate', $travel_date);

      $found_schedule = $this->db->get('OPERATORSCHEDULE');

      return $found_schedule->result();
      } */

    //display group ticket
    function gp_success() {
        $groupname = $_POST['contact_name'];
        $groupemail = $_POST['contact_email'];
        $groupphone = $_POST['group_phone'];
        $travellers = $_POST['travellers'];
        $busop = $_POST['busop'];
        $trav_from = $_POST['trav_from'];
        $trav_to = $_POST['trav_to'];
        $trav_date = $_POST['trav_date'];
        $info = $_POST['add_info'];

        //insert function
        $insert_group_details = $this->Ticket->gp_submit($groupname, $groupemail, $groupphone, $travellers, $busop, $trav_from, $trav_to, $trav_date, $info);
        //search details by name of customer
        $groupname = $_POST['contact_name'];
        $search_group = array(
            'search_result' => $this->Ticket->groupDetails($groupname)
        );

        //redirect  to...
        if ($insert_group_details) {
            $this->load->view('success\group_succ', $search_group);
        } else {
            echo "error in inserting data in database";
        }
    }

    //display contact page
    function contact() {
        $this->load->view('contactus');
    }

    //displaying the group booking
    function groupBook() {
        $this->load->view('group');
    }

    //displaying the group booking
    function terms() {
        $this->load->view('documentation\terms');
    }

    //displaying the group booking
    function faqs() {
        $this->load->view('documentation\faqs');
    }

    //displaying the group booking
    function howitworks() {
        $this->load->view('documentation\howitworks');
    }

}
