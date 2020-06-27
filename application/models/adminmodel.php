<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adminmodel extends CI_Model {
    

    public function getsubjects($course,$sem)
    {
        if($course)
        $this->db->where("course",$course);
        if($sem)
        $this->db->where("semester",$sem);

        $rsesult= $this->db->get("subject");
       return $rsesult->result();
    }
	public function getAllGuideTeachers()
    {
        $this->db->where("qualificn","PhD");
       $rsesult= $this->db->get("teachers");
       return $rsesult->result();
    }
    public function getAllTeachers()
    {
       $rsesult= $this->db->get("teachers");
       return $rsesult->result();
    }
    public function studinsert($n)
	{
        $this->db->insert("students",$n);
       
        if($this->db->affected_rows()>0)
        {
            return true;
        }
        
        
    }
    
    public function getStudentById($var = null)
    {
        $this->db->where("adno",$var);
       $rsesult= $this->db->get("students");
       if($rsesult->num_rows()>0)
       {
            return $rsesult->result()->row();
        }
        return null;
    }
    public function getTeacherById($var = null)
    {
        $this->db->where("tid",$var);
       $rsesult= $this->db->get("teachers");
       if($rsesult->num_rows()>0)
       {
            return $rsesult->result()->row();
        }
        return null;
    }
    
    public function stud_login($n)
    {
        $this->db->insert("login",$n);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
    }
    public function resinsert($n)
    {
        $this->db->insert("students",$n);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
    }
        
    public function res_login($n)
    {
        $this->db->insert("login",$n);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
    }
        
    public function login($n,$p)
	{
        $this->db->where("uname",$n);
        $this->db->where("pswd",$p);
        $data=$this->db->get("login");
         if($data->num_rows()>0)
        {
            return $data;
        }
  
        
        
    }
    
    
    public function trinsert($n)
	{
        $this->db->insert("teachers",$n);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
        
        
    }
    public function teacher_login($n)
    {
        $this->db->insert("login",$n);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
    }
    public function coursecheck($n)
	{
        $this->db->where("course",$n['course']);
        $result=$this->db->get("course",$n);
        if($result->num_rows()>0)
        {
            return true;
        }
        return false;
        
        
    }
    public function courseinsert($n)
	{
        $this->db->insert("course",$n);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
        
        
    }
    public function intinsert($n)
	{
        $this->db->insert("students",$n);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
        
        
    }
    public function course_details()
    {
        
    $details=$this->db->get('course');
    return $details->result();

}
 public function coursedelete($b)
    {
        
        
       $this->db->where("course",$b);
    $this->db->delete("course");
    if($this->db->affected_rows()>0)
    {
        return true;
    }

}
public function stud_details()
{
    $stud=$this->db->get('students');
    
    return $stud->result();
}

public function tcr_details()
{
    $tcr=$this->db->get('teachers');
    
    return $tcr->result();
}

public function pass_details()
{
    $stud=$this->db->get('students');
    
    return $stud->result();
}
public function getStudentsWhereLike($field, $search)
{ 
    $query = $this->db->like($field, $search)->get('students');
    return $query->result();
}
public function getTeachersWhereLike($field, $search)
{ 
    $query = $this->db->like($field, $search)->get('teachers');
    return $query->result();
}
public function change_admin_pass($oldpass,$newpass){
        $data=array('pswd'=>$newpass);
        $this->db->where("uname","admin");
        $this->db->where("pswd",$oldpass);
        $this->db->update("login",$data);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
    
}
public function change_stud_pass($studid,$newpass){
        $data=array('pswd'=>$newpass);
        $this->db->where("uname",$studid);
        $this->db->update("login",$data);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
        return false;
    
}
public function change_teacher_pass($teacherid,$newpass){
        $data=array('pswd'=>$newpass);
        $this->db->where("uname",$teacherid);
         $this->db->update("login",$data);
        if($this->db->affected_rows()>0)
        {
            return true;
        }
    
}
public function get_internals($course,$sem){
   
   $this->db->where('course',$course);
   $this->db->where('semester',$sem);
    $details=$this->db->get('inmark');
    
    return $details->result();
}
public function course(){
   
    $details=$this->db->get('course');
    
    return $details->result();
}
public function pass_out(){
    $this->db->where('yearofpass is  NOT NULL', NULL, FALSE);
    $details=$this->db->get('students');
    
    return $details->result();
}
public function drop_out(){
   
    $this->db->where('yearofdrop is  NOT NULL', NULL, FALSE);
    $details=$this->db->get('students');
    
    return $details->result();
}
public function get_student_timetable($course,$sem)
{
    $this->db->join('teachers','teachers.tid=lecture','left outer');
    $this->db->where('course',$course);
    $this->db->where('semester',$sem);
    $query= $this->db->get('timetable');
    return $query->result();
   
}
public function get_teacher_timetable($tid){
  
    $this->db->where('lecture',$tid);
    $details=$this->db->get('timetable');
        return $details->result();
  
}
public function get_attendence($course,$sem,$from)
{


    // $this->db->select('name,attendence.* ,count(attendence.status),attendence.status');
    // $this->db->join('students','attendence.adno=students.adno');
    // $this->db->where('atcourse',$course);
    // $this->db->where('atsem',$sem);
    // if($from)
    //    $this->db->where('date >=',$from);
    // $this->db->group_by('attendence.adno');    
    // $this->db->group_by('attendence.atcourse');
    
    // $this->db->group_by('attendence.status');
    // $query=  $this->db->get('attendence');
    $this->db->select("students.*, (select count(*) from  attendence where attendence.adno=students.adno and attendence.status='present' and date>$from and  attendence.atsem=$sem  ) as present,(select count(*) from  attendence where attendence.adno=students.adno and attendence.status='absent' and date>$from and  attendence.atsem=$sem  ) as absent");
    $this->db->where('course',$course);
    $this->db->where('sem',$sem);
    $query=  $this->db->get('students');
    return $query->result();

}
    public function student_result($course,$sem){
        $this->db->where('yearofpass',NULL);  
        $this->db->where('yearofdrop',NULL);    
   $this->db->where('course',$course);
   if($sem)
   {
        $this->db->where('sem',$sem);
   }
    $details=$this->db->get('students');
    
    return $details->result();
}
public function add_result($passout=array(),$dropout=array())
{
    if(count($passout)>0)
   { 
       $this->db->select('*')
        ->from('students')
        ->join("course","course.course = students.course")
        ->where_in('adno', $passout);
            $query = $this->db->get();
            $res = $query->result();
            foreach ($res as $user ) 
            {
                if(($user->sem +1)>$user->semester)//checking for passout or next semester
                {
                        $this->db->set('yearofpass', date("Y"));
                        $this->db->where('adno', $user->adno);
                        $this->db->update('students');
                }
                else
                {
                        $this->db->set('sem', $user->sem +1);
                        $this->db->where('adno', $user->adno);
                        $this->db->update('students');
                }
            }
    }
    if(count($dropout)>0)
   { 
       $this->db->select('*')
        ->from('students')
        ->where_in('adno', $dropout);
            $query = $this->db->get();
            $res = $query->result();
            foreach ($res as $user ) 
            {
            
                        $this->db->set('yearofdrop', date("Y"));
                        $this->db->where('adno', $user->adno);
                        $this->db->update('students');
            }
    }
  
    return true;
        
}
public function store_timetable_id($course,$sem){
    
   $data=array("course"=>$course,"semester"=>$sem); 
   $this->db->insert("timetable_id",$data);
   if($this->db->affected_rows()>0)
        {
           return true; 
        }
}
public function store_s_timetable($data) {
        $this->db->where('course',$data['course']);
        $this->db->where('semester',$data['semester']);
        $this->db->where('weekday',$data['weekday']);
        $this->db->where('period',$data['period']);
        $this->db->limit(1);
        $result=$this->db->get('timetable');
        if($result->num_rows()>0)
        {
            $this->db->where('course',$data['course']);
            $this->db->where('semester',$data['semester']);
            $this->db->where('weekday',$data['weekday']);
            $this->db->where('period',$data['period']);
            $this->db->set('subject',$data['subject']);
            if($data['lecture'])
            {
                $this->db->set('lecture',$data['lecture']);
                
            }
            $this->db->set('lecture',NULL);
            $this->db->update('timetable');
            return true;
        }
        else
        {
            $this->db->insert('timetable',$data);
            return true;
        }
       
    }
    public function store_t_timetable($tid,$monday, $tuesday, $wednesday, $thursday, $friday) {

        for ($i = 0; $i < 5; $i++) {
            $data = array("table_id" => $tid, "monday" => $monday[$i], "tuesday" => $tuesday[$i], "wednesday" => $wednesday[$i], "thursday" => $thursday[$i], "friday" => $friday[$i]);
            $this->db->insert("timetable", $data);
        }
        if ($this->db->affected_rows() > 0) {
            return true;
        }
    }

}