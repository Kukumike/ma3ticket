<?php
class Ticket extends CI_Model{

    function db_search($sId, $fair, $capacity,$operatorId) {

        //get values in OPERATORSCHEDULE table
        $this->db->select('*');
        $this->db->where('scheduleId', $sId);
        $this->db->where('scheduleBusCost', $fair);
        $this->db->where('scheduleBusCapacity', $capacity);
        $this->db->where('operatorId',$operatorId);

        $details = $this->db->get('OPERATORSCHEDULE');

        return $details->result();

    }

//submit details to dBase
    function db_submit($customerName, $customerId, $customerPhone, $inputBus, $inputFrom, $inputTo, $inputDate, $inputTime, $inputSeats, $inputCost, $operatorId, $scheduleBusCost) {
        //ticket Details Array
        $ticketDetails = array(
            'customerName' => $customerName,
            'customerId' => $customerId,
            'customerContact' => $customerPhone,
            'busDetails' => $inputBus,
            'from' => $inputFrom,
            'to' => $inputTo,
            'dateScheduled' => $inputDate,
            'time' => $inputTime,
            'seats' => $inputSeats,
            'totalCost' => $inputCost,
            'operatorId' => $operatorId,
            'scheduleBusCost' => $scheduleBusCost
        );
        //insert
        $ticketBook = $this->db->insert('ticket', $ticketDetails);

        return $ticketBook;
    }

    //get Ticket details...
    function ticketDetails($customer) {
        //get values IN OPERATORSCHEDULE table
        $this->db->select('*');
        $this->db->where('customerName', $customer);

        $details = $this->db->get('TICKET');

        return $details->result();
    }

    //group ticket submit database
    function gp_submit($groupname, $groupemail, $groupphone, $travellers, $busop, $trav_from, $trav_to, $trav_date, $info) {
        //ticket array
        $groupDetails = array(
            'groupname'=>$groupname,
            'groupemail'=>$groupemail,
            'groupphone'=>$groupphone,
            'numbertravellers'=>$travellers,
            'busname'=>$busop,
            'from'=>$trav_from,
            'to'=>$trav_to,
            'datetotravel'=>$trav_date,
            'groupinfo'=>$info
        );
        //insert
        $groupBook = $this->db->insert('groupbooking', $groupDetails);

        return $groupBook;
        
    }
    //get GROUP details...
    function groupDetails($groupname) {
        //get values IN GROUPBOOKING table
        $this->db->select('*');
        $this->db->where('groupname', $groupname);

        $details = $this->db->get('GROUPBOOKING');

        return $details->result();
    }
    //update the bus capacity
    function db_update($scheduleId,$busCapacity,$inputSeats){
        //reuduce capacity by one
        $newCapacity  = $busCapacity - $inputSeats ;
        //update querry
        $this->db->select('*');
        $this->db->where('scheduleId',$scheduleId);
        
        $data = array(
            'scheduleBusCapacity' => $newCapacity 
        );
        $update = $this->db->update('operatorschedule',$data);    
    }
}
