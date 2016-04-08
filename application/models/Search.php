<?php
class Search extends CI_Model{
    
    
    //general search function
    function search_all($from, $to, $travel_date){
        
        
        //get db values
        $this->db->select('*');
        $this->db->where('scheduleFrom', $from);
        $this->db->where('scheduleTo', $to);
        $this->db->where('scheduleDate', $travel_date);
        
        $found_schedule = $this->db->get('OPERATORSCHEDULE');
        
        return $found_schedule->result();
    }
    
    //general search function
    function num_search_all($from, $to, $travel_date){
        
        //get db number affected
        $this->db->where('scheduleFrom', $from);
        $this->db->where('scheduleTo', $to);
        $this->db->where('scheduleDate', $travel_date);
        
        $found_schedule = $this->db->count_all_results('OPERATORSCHEDULE');
        
        return $found_schedule;
    }
}