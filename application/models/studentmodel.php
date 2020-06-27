<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class studentmodel extends CI_Model {

public function student_details()
{
$adno=$this->session->userdata('adno');
$this->db->where('adno',$adno);
$details=$this->db->get('students');
return $details->result();
        
}
public function update_registerstud($data)
{
    $adno=$this->session->userdata('adno');
    $this->db->where('adno',$adno);
    $this->db->update('students',$data);
    if($this->db->affected_rows()>0)
    {
        return true;
    }

}
public function apply_leave($data)
{
   
    $this->db->insert('leave_applications',$data);
    if($this->db->affected_rows()>0)
    {
        return true;
    }

}
public function get_internals($course,$sem){
    $adno=$this->session->userdata('adno');
   $this->db->where('regNo',$adno);
   $this->db->where('course',$course);
   $this->db->where('semester',$sem);
    $details=$this->db->get('inmark');
    
    return $details->result();
}
public function get_attendence($course,$sem){
   
    $adno=$this->session->userdata('adno');
     $this->db->where('course',$course);
   $this->db->where('semester',$sem);
   $query=  $this->db->get('attendence_id');
   $c=count($query->result());
      if($c==""){
        return;
    }
   else{
   $this->db->where('course',$course);
   $this->db->where('semester',$sem);
      
   $this->db->limit(1);
   $id = $this->db->get('attendence_id')-> row()->Id;
   
    $this->db->where('adno',12345);
   $this->db->where('Id',$id);
    $this->db->where('status','present');
    $query=$this->db->get('attendence');
    
    return $query->num_rows();
   }

    }
public function get_assignment($course,$sem){
  
   $this->db->where('course',$course);
   $this->db->where('semester',$sem);
    $details=$this->db->get('assignment');
    
    return $details->result();
}
public function get_timetable($course,$sem){
    $this->db->where('course', $course);
        $this->db->where('semester', $sem);
        $query = $this->db->get('timetable_id');
        $c = count($query->result());
        
        if ($c == "") {
            return;
        } else {
            $this->db->where('course', $course);
            $this->db->where('semester', $sem);

            $this->db->limit(1);
            $id = $this->db->get('timetable_id')->row()->id;

            $this->db->where('table_id', $id);
            $details = $this->db->get('timetable');
            return $details->result();
        }
} 

        }   