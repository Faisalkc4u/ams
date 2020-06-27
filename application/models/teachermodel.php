<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class teachermodel extends CI_Model {

public function teacher_details()
{
$adno=$this->session->userdata('tid');
$this->db->where('tid',$adno);
$details=$this->db->get('teachers');
return $details->result();
        
}
public function update_register($data)
{
    $tid=$this->session->userdata('tid');
    $this->db->where('tid',$tid);
    $this->db->update('teachers',$data);
    if($this->db->affected_rows()>0)
    {
        return true;
    }

}
public function completed_teacher_profile()
{
    $tid=$this->session->userdata('tid');
    $this->db->where('tid',$tid);
    $this->db->update('teachers',['profile'=>'complete']);
}
   public function internal_mark($n)
	{
        $this->db->insert("inmark",$n);
       
        if($this->db->affected_rows()>0)
        {
            return true;
        }
        
        
    }
    public function add_assignment($n)
    {
        $this->db->insert("assignment",$n);
       
        if($this->db->affected_rows()>0)
        {
            return true;
        }
        
    }
    public function get_attendance_list($course,$sem,$period,$date)
    {
        
    }
   public function get_students($course, $sem)
           
 { 
       $this->db->where('semester', $sem);
        $this->db->where('course', $course);
        $query = $this->db->get('attendence_id');
        if ($query->num_rows() != 0) {
            $this->db->where('course', $course);
            $details = $this->db->get('students');
            return $details->result();
        } else {
            $data = array('course' => $course, 'semester' => $sem);
            $this->db->insert("attendence_id", $data);
            if ($this->db->affected_rows() > 0) {
                $this->db->where('course', $course);
                $details = $this->db->get('students');
                return $details->result();
            }}
   
        
}
public function add_attendence($period,$present,$absent)
{
    $stud_prsnt=explode(',', $present);

    $this->db->select('name');
    $this->db->where_in('adno', $stud_prsnt);
    $query = $this->db->get('students');
    $res = $query->result();
    $n=count($stud_prsnt);
  
   $this->db->order_by('Id','desc');
   $this->db->limit(1);
   $id = $this->db->get('attendence_id')-> row()->Id;
  
   $i=0;
foreach($res as $r){
   
   $data=array("adno"=>$stud_prsnt[$i],"name"=>$r->name,"date"=>date("Y-m-d"),"status"=>"present","period"=>$period,"Id"=>$id); 
   $this->db->insert("attendence",$data);
   if($i<$n){
       $i++;
}}
   $stud_absnt=explode(',', $absent);
   $this->db->select('name');
    $this->db->where_in('adno', $stud_absnt);
    $query1= $this->db->get('students');
    $res1 = $query1->result();
    $v=count($stud_absnt);
    $j=0;
   foreach($res1 as $r1){
   
   $data=array("adno"=>$stud_absnt[$j],"name"=>$r1->name,"date"=>date("Y-m-d"),"status"=>"absent","period"=>$period,"Id"=>$id); 
   $this->db->insert("attendence",$data);
   if($j<$v){
       $j++;
}}

 if($this->db->affected_rows()>0)
        {
            return true;
        }
}
//Not using this method
public function get_timetable(){
    $tid=$this->session->userdata('tid');
$this->db->where('table_id',16);
$details=$this->db->get('timetable');
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
   
     $this->db->select('adno,name');
    $this->db->group_by('adno');
     $this->db->where('Id',$id);
    
    $query=$this->db->get('attendence');
    
    return $query->result();
   }
}

}