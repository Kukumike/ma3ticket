<?php

class Admin extends CI_Controller {

    function index() {
        $this->opp();
    }

    //get current operatorid
    function get_operator_id() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');

            $operator_id = $session_data['operatorId'];

            return $operator_id;
        } else {
            //If no session, redirect to login page
            $this->login();
        }
    }

    //user index
    function opp() {
        if ($this->session->userdata('logged_in')) {

            $data = array(
                'operatorId' => $this->get_operator_id(),
                'operatorDetails' => $this->Operator->get_operator_details($this->get_operator_id()),
                'activeOperations' => $this->Operator->get_all_schedules($this->get_operator_id()),
                'numberActiveOperations' => $this->Operator->get_active_operation_count($this->get_operator_id()),
                'activeTickets' => $this->Operator->get_all_tickets($this->get_operator_id()),
                'numberActiveTickets' => $this->Operator->get_active_tickets_count($this->get_operator_id())
            );

            $this->load->view('operator/home', $data);
        } else {
            //If no session, redirect to login page
            $this->login();
        }
    }

    //logout function
    function signout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        //Go to doctor login area
        $this->login();
    }

    //login page
    function login() {
        //Go to operator login area
        redirect('login', 'refresh');
    }

    //add schedule
    function add_opp_schedule() {
        $opp_id = $_POST['opp_id'];
        $sch_from = $_POST['sch_from'];
        $sch_to = $_POST['sch_to'];
        $sch_date = $_POST['sch_date'];
        $sch_time = $_POST['sch_time'];
        $sch_bus = $_POST['sch_bus'];
        $sch_bus_capacity = $_POST['sch_bus_capacity'];
        $sch_bus_cost = $_POST['sch_bus_cost'];

        //pass variable to schedule add model
        $add_schedule_success = $this->Operator->add_schedule($opp_id, $sch_from, $sch_to, $sch_date, $sch_time, $sch_bus, $sch_bus_capacity, $sch_bus_cost);

        //redirect if inserted
        if ($add_schedule_success) {

            redirect('redirectSuccess');
        } else {

            redirect('redirectError');
        }
    }

    //redirect on success
    function red_success() {

        $data = array(
            'operatorId' => $this->get_operator_id(),
            'operatorDetails' => $this->Operator->get_operator_details($this->get_operator_id()),
            'message_class' => "alert alert-success text-center",
            'alert_message' => '<p>Your bus updated was successfully added.<a href=' . base_url("activeOperation") . ' class="alert-link">Check it out</a></p>'
        );

        $this->load->view('operator/opp_success', $data);
    }

    //redirect on error
    function red_error() {
        $data = array(
            'operatorId' => $this->get_operator_id(),
            'operatorDetails' => $this->Operator->get_operator_details($this->get_operator_id()),
            'message_class' => "alert alert-danger text-center",
            'alert_message' => '<p>An error occured.<a href=' . base_url("op") . ' class="alert-link">Try again</a></p>'
        );

        $this->load->view('operator/opp_success', $data);
    }

    //add operation
    function add_operations() {
        $data = array(
            'operatorId' => $this->get_operator_id(),
            'operatorDetails' => $this->Operator->get_operator_details($this->get_operator_id())
        );

        $this->load->view('operator/add_operation', $data);
    }

    //load active operations
    function active_operations() {
        $data = array(
            'operatorId' => $this->get_operator_id(),
            'operatorDetails' => $this->Operator->get_operator_details($this->get_operator_id()),
            'activeOperations' => $this->Operator->get_all_schedules($this->get_operator_id()),
            'numberActiveOperations' => $this->Operator->get_active_operation_count($this->get_operator_id())
        );

        $this->load->view('operator/active_operation', $data);
    }

    //schedule preview
    function schedule_preview($scheduleId) {

        $data = array(
            'operatorId' => $this->get_operator_id(),
            'operatorDetails' => $this->Operator->get_operator_details($this->get_operator_id()),
            'scheduleDetails' => $this->Operator->get_schedule_details($scheduleId),
            'scheduleId' => $scheduleId,
            'message_class' => "hidden",
            'alert_message' => '<p></p>'
        );
        $this->load->view('operator/schedule_preview', $data);
    }

    //update schedule
    function update_opp_schedule() {
        $sch_id = $_POST['sch_id'];
        $sch_from = $_POST['sch_from'];
        $sch_to = $_POST['sch_to'];
        $sch_date = $_POST['sch_date'];
        $sch_time = $_POST['sch_time'];
        $sch_bus = $_POST['sch_bus'];
        $sch_bus_capacity = $_POST['sch_bus_capacity'];
        $sch_bus_cost = $_POST['sch_bus_cost'];

        //pass variable to schedule add model
        $add_schedule_success = $this->Operator->update_schedule($sch_id, $sch_from, $sch_to, $sch_date, $sch_time, $sch_bus, $sch_bus_capacity, $sch_bus_cost);

        //redirect if inserted
        if ($add_schedule_success) {

            $this->update_schedule_suc_notification($sch_id);
        } else {

            $this->update_schedule_err_notification($sch_id);
        }
    }

    //update schedule
    function delete_opp_schedule() {
        $sch_id = $_POST['sch_id'];

        //pass variable to schedule delete model
        $delete_schedule_success = $this->Operator->delete_schedule($sch_id);

        //redirect if inserted
        if ($delete_schedule_success) {

            redirect('redirectSuccess');
        } else {

            $this->update_schedule_err_notification($sch_id);
        }
    }

    //update success notification
    function update_schedule_suc_notification($sch_id) {

        $data = array(
            'operatorId' => $this->get_operator_id(),
            'operatorDetails' => $this->Operator->get_operator_details($this->get_operator_id()),
            'scheduleDetails' => $this->Operator->get_schedule_details($sch_id),
            'scheduleId' => $sch_id,
            'message_class' => "alert alert-success text-center",
            'alert_message' => '<p>Your bus schedule was successfully updated</p>'
        );
        $this->load->view('operator/schedule_preview', $data);
    }

    //update error notification
    function update_schedule_err_notification($sch_id) {

        $data = array(
            'operatorId' => $this->get_operator_id(),
            'operatorDetails' => $this->Operator->get_operator_details($this->get_operator_id()),
            'scheduleDetails' => $this->Operator->get_schedule_details($sch_id),
            'scheduleId' => $sch_id,
            'message_class' => "alert alert-danger text-center",
            'alert_message' => '<p>Sorry an error occured. Try again</p>'
        );
        $this->load->view('operator/schedule_preview', $data);
    }

}
