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
        if($n['docId'])
        {
            $this->db->where('docId',$n['docId']);
            $this->db->update("inmark",$n);
        }
        else
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
        $this->db->where('sem', $sem);
        $this->db->where('course', $course);
        $this->db->where('yearofpass is   NULL' );
        $this->db->where('yearofdrop is  NULL');
        $query = $this->db->get('students');
        return $query->result();
    }
    public function get_students_attendance($course, $sem,$period,$date=null)
    { 
        
        $this->db->select('attendence.*,students.name as name,students.course,students.adno as adno');
        $this->db->join("attendence","attendence.adno=students.adno and attendence.atcourse=students.course and attendence.atsem=$sem and attendence.atperiod =$period and attendence.date='$date'","left outer");
        $this->db->where('sem', $sem);
        $this->db->where('course', $course);
        $this->db->where('yearofpass is  NULL' );
        $this->db->where('yearofdrop is  NULL');
        $query = $this->db->get('students');
        return $query->result();
    }
public function add_attendence($list,$period,$date,$status,$subject)
{
    $stdList=implode(",",$list);
    $tid=$this->session->userdata('tid');
    $query = $this->db->query("insert into attendence (atcourse,atsem,atperiod,attakenby,adno,date,status,atsub)
    select course,sem,$period,$tid,adno,'$date','$status','$subject'
    from students
    where adno in($stdList)
    ");
}
public function update_attendence($list,$status)
{
    
    $tid=$this->session->userdata('tid');
    $stdList=implode(",",$list);
    $this->db->set('status',$status);
    
    $this->db->set('attakenby',$tid);
    $this->db->where_in('sno',$stdList);
    $this->db->update('attendence');
    return true;
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