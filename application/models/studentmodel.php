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
    $details=$this->db->get('inmark');
    
    return $details->result();
}
public function get_attendence(){
   
    $adno=$this->session->userdata('adno');
    $from='';
        $month=date('m');
      if($month<=6){
        $from=date('Y').'-06-01';
      }else
      {
        $from=date('Y')-1;
        $from.='-06-01';
      }
    
    $this->db->select("students.*, (select count(*) from  attendence where attendence.adno=students.adno and attendence.status='present' and date>$from and  attendence.atsem=students.sem  ) as present,(select count(*) from  attendence where attendence.adno=students.adno and attendence.status='absent' and date>$from and  attendence.atsem=students.sem ) as absent");
    $this->db->where('adno',$adno);
    
    $query=  $this->db->get('students');
    return $query->result();

    }
public function get_assignment(){
    $adno=$this->session->userdata('adno');
    $this->db->join("students","students.course=assignment.course");
    $this->db->where('yearofpass  is NULL',NULL);  
    $this->db->where('yearofdrop is NULL',NULL);
    $this->db->where('students.adno',$adno);
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