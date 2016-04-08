<?php

class Operator extends CI_Model {

    //signup opperator
    function operator_signup($operatorName, $operatorMail, $operatorPassword) {

        //insert values
        $operatorSignupData = array(
            'operatorName' => $operatorName,
            'operatorMail' => $operatorMail,
            'operatorPassword' => do_hash($operatorPassword),
            'operatorUrl' => urlencode($operatorName),
            'operatorStatus' => 0,
            'verificationId' => do_hash($operatorName)
        );

        $signupQuery = $this->db->insert('OPERATOR', $operatorSignupData);

        return $signupQuery;
    }

    //activate account
    function activate_account($verificationId) {

        $activationData = array(
            'operatorStatus' => 1
        );

        $this->db->where('verificationId', $verificationId);
        $successActivation = $this->db->update('OPERATOR', $activationData);

        return $successActivation;
    }

    //login check & validation
    function login($operatorMail, $operatorPassword) {
        $this->db->select('operatorId');
        $this->db->where('operatorMail', $operatorMail);
        $this->db->where('operatorPassword', do_hash($operatorPassword));
        $this->db->where('operatorStatus', 0);
        $this->db->limit(1);

        $loginQuery = $this->db->get('OPERATOR');

        if ($loginQuery->num_rows() == 1) {
            return $loginQuery->result();
        } else {
            return FALSE;
        }
    }

    //get operator info
    function get_operator_details($operatorId) {

        //search operator table
        $this->db->select('*');
        $this->db->where('operatorId', $operatorId);
        $foundDetails = $this->db->get('OPERATOR');

        if ($foundDetails->num_rows() > 0) {
            foreach ($foundDetails->result() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return FALSE;
        }
    }

    //add operator schedule
    function add_schedule($opp_id, $sch_from, $sch_to, $sch_date, $sch_time, $sch_bus, $sch_bus_capacity, $sch_bus_cost) {

        //schedule array
        $schedule_data = array(
            'operatorId' => $opp_id,
            'scheduleFrom' => $sch_from,
            'scheduleTo' => $sch_to,
            'scheduleDate' => $sch_date,
            'scheduleTime' => $sch_time,
            'scheduleBus' => $sch_bus,
            'scheduleBusCapacity' => $sch_bus_capacity,
            'scheduleBusCost' => $sch_bus_cost
        );

        //insert
        $schedule_add_success = $this->db->insert('OPERATORSCHEDULE', $schedule_data);

        return $schedule_add_success;
    }

    //get all active schedules
    function get_all_schedules($id) {
        $this->db->where('operatorId', $id);
        $this->db->where('scheduleStatus', 1);
        $this->db->order_by('scheduleId', 'desc');
        $queryActive = $this->db->get('OPERATORSCHEDULE');

        return $queryActive->result();
    }

    //get operations count
    function get_active_operation_count($id) {
        $this->db->where('operatorId', $id);
        $this->db->where('scheduleStatus', 1);
        $queryNumber = $this->db->count_all_results('OPERATORSCHEDULE');

        return $queryNumber;
    }

    //get schedule info
    function get_schedule_details($scheduleId) {

        //search operator table
        $this->db->select('*');
        $this->db->where('scheduleId', $scheduleId);
        $foundDetails = $this->db->get('OPERATORSCHEDULE');

        if ($foundDetails->num_rows() > 0) {
            foreach ($foundDetails->result() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return FALSE;
        }
    }

    //update operator schedule
    function update_schedule($sch_id, $sch_from, $sch_to, $sch_date, $sch_time, $sch_bus, $sch_bus_capacity, $sch_bus_cost) {

        //schedule array
        $schedule_data = array(
            'scheduleFrom' => $sch_from,
            'scheduleTo' => $sch_to,
            'scheduleDate' => $sch_date,
            'scheduleTime' => $sch_time,
            'scheduleBus' => $sch_bus,
            'scheduleBusCapacity' => $sch_bus_capacity,
            'scheduleBusCost' => $sch_bus_cost
        );

        //updte
        $this->db->where('scheduleId', $sch_id);
        $schedule_update_success = $this->db->update('OPERATORSCHEDULE', $schedule_data);

        return $schedule_update_success;
    }

    //delete operator schedule
    function delete_schedule($sch_id) {

        //schedule array
        $schedule_data = array(
            'scheduleStatus' => 0
        );

        //updte
        $this->db->where('scheduleId', $sch_id);
        $schedule_delete_success = $this->db->update('OPERATORSCHEDULE', $schedule_data);

        return $schedule_delete_success;
    }

    //get all active schedules
    function get_all_tickets($id) {
        $this->db->where('operatorId', $id);
        $this->db->where('ticketStatus', 1);
        $this->db->order_by('ticketId', 'desc');
        $queryActive = $this->db->get('TICKET');

        return $queryActive->result();
    }

    //get operations count
    function get_active_tickets_count($id) {
        $this->db->where('operatorId', $id);
        $this->db->where('ticketStatus', 1);
        $queryNumber = $this->db->count_all_results('TICKET');

        return $queryNumber;
    }

}
