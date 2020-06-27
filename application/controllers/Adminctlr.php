<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminctlr extends CI_Controller {

	
	public function index()
	{
		$this->load->view('first');
    }
    public function home()
	{
        $this->load->view('logins');
        
    }
    public function course_completion()
	{
        $this->load->model("adminmodel","",true);
	    $data['details']=$this->adminmodel->course_details();
        $this->load->view('admin/course_completion',$data);
        
    }
    public function deptadmin()
	{
		$this->load->view('admin/deptadmin');
    }
    public function adminfacilities()
	{
		$this->load->view('admin/adminfacilities');
    }
    public function mca()
	{
		$this->load->view('mca');
    }
    public function mcale()
	{
		$this->load->view('mcale');
    }
    public function msc()
	{
		$this->load->view('msc');
    }
    public function mphil()
	{
		$this->load->view('mphil');
    }
    public function phd()
	{
		$this->load->view('phd');
    }

    public function sreg()
	{
        $this->load->view('admin/sreg');
        
    }
       public function research_register()
	{
        $this->load->model("adminmodel","",true);
        $data['guidList']=$this->adminmodel->getAllGuideTeachers();
        $this->load->view('admin/research_register',$data);
        
    }
        public function research_studadd()
	{
        
        
        $name=array("adno"=>$this->input->post("adno"),"name"=>$this->input->post("name"),"dob"=>$this->input->post("DOB"),"gender"=>$this->input->post("gender"),"course"=>$this->input->post("Course"),"religion"=>$this->input->post("religion"),"caste"=>$this->input->post("caste"),"category"=>$this->input->post("category"),"dateofjoin"=>$this->input->post("doj"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone"),"type"=>"research","status"=>"incomplete");
        if($this->input->post("guid"))
        {
            $name['guid']=$this->input->post("guid");
        }
        if($this->input->post("mode"))
        {
            $name['mode']=$this->input->post("mode");
        }
        $this->load->model("adminmodel","",true);
        $r7=$this->adminmodel->studinsert($name);
        //
        $std_details=array("uname"=>$this->input->post("adno"),'pswd'=>$this->input->post("DOB"),'Type'=>'Research_Student');
        $this->load->model("adminmodel","",true);
        $r8=$this->adminmodel->stud_login($std_details);
        if($r7==true)
       if($r8==true)
        {
            $this->sendEmail($this->input->post("email"),'Hi,'.$this->input->post("name").' Login Detais','Please find the login details from below <br/> Email: '.$this->input->post("email").'<br/> Username: '.$this->input->post("adno").' <br/> Password: '.$this->input->post("DOB"));
       $this->session->set_flashdata('Success','Research Student Registration Successful');
        }
        else{
            $this->session->set_flashdata('Failed','Failed to register research student ');
        }
        redirect('Adminctlr/research_register');
    

    }
    public function change_password()
	{
		$this->load->view('admin/change_password');
    }

    
    public function studadd()
	{
        
        
        $validate=true;
        if(!$this->input->post("adno"))
       {
           $this->session->set_flashdata('Failed','Admission Number is required');
           $validate=false;
       } 
       //Phone validations
       if(!$this->input->post("phone"))
       {
           $this->session->set_flashdata('Failed','Phone number is required');
           $validate=false;
       }elseif(strlen($this->input->post("phone")!=10))
       {
           $this->session->set_flashdata('Failed','Phone number must have 10 digits');
           $validate=false;
       } 

       //Phone validation ends
    if($validate)// After validation succeded
       { 
           $name=array("adno"=>$this->input->post("adno"),"name"=>$this->input->post("name"),"dob"=>$this->input->post("DOB"),"gender"=>$this->input->post("gender"),"course"=>$this->input->post("Course"),"sem"=>$this->input->post("sem"),"duration"=>$this->input->post("duration"),"dateofjoin"=>$this->input->post("doj"),"religion"=>$this->input->post("religion"),"caste"=>$this->input->post("caste"),"category"=>$this->input->post("category"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone"));
        $this->load->model("adminmodel","",true);
        $r6=$this->adminmodel->studinsert($name);
        //
        $std_details=array("uname"=>$this->input->post("adno"),'pswd'=>$this->input->post("DOB"),'Type'=>'Student');
        $this->load->model("adminmodel","",true);
        $r7=$this->adminmodel->stud_login($std_details);
        if($r7==true)
        {
            
          $this->sendEmail($this->input->post("email"),'Hi,'.$this->input->post("name").' Login Detais','Please find the login details from below <br/> Email: '.$this->input->post("email").'<br/> Username: '.$this->input->post("adno").' <br/> Password: '.$this->input->post("DOB"));

            
       $this->session->set_flashdata('Success','Student Registration Successful');
        }
        else{
            $this->session->set_flashdata('Failed','Failed to register student ');
        }}
        redirect('Adminctlr/sreg');
    

    }
    
    
    
    public function log()
	{
		$uname=$this->input->post("username");
        $pwd=$this->input->post("password");
         if($uname==""&& $pwd==""){
            $this->load->view('admin/home');
        }

        $this->load->model("adminmodel","",true);
        $r2=$this->adminmodel->login($uname,$pwd);
        
        if(!empty($r2)){
        foreach ($r2->result() as $row)
        {
            
                if($row->Type=="admin")
                {
                    $this->load->view('admin/home');
                }
        
        
               if($row->Type=="Student")
                {   $this->session->set_userdata('type',$row->Type); 
                    $this->session->set_userdata('adno',$row->uname); 
                    $this->load->view('student/studhome');
                }
                 if($row->Type=="Research_Student")
                {   
                    $this->session->set_userdata('types',$row->Type);
                     $this->session->set_userdata('adno',$row->uname); 
                    $this->load->view('research_scholors/home');
                }
               if($row->Type=="Teacher")
                {   
                    $this->session->set_userdata('tid',$row->uname); 
                   $this->load->view('teacher/teacherhome');
                }
            
        } 
       }
            else{
            ?>
	   <script>
	   alert("Incorrect username or password");
	   window.location="<?php echo base_url();?>index.php/Adminctlr/home";
	   </script>
	   <?php
	  
            
        }
        }
       // if($r2==true)
        //{
            
            //$this->load->view('admin/home');

        //}
        //else{
           // echo "incorrect username or password";
        //}
    
    
    // public function teacreg()
	// {
	// 	$this->load->view('admin/treg');
    // }
    public function logout()
	{
        $this->load->view('first');
    }
   
    //student back to home
    public function back()
	{
        $this->load->view('student/studhome');
    }
    //teacher back to home
    public function backmove()
    {
        $this->load->view('teacher/teacherhome');
    }
    public function researchhome()
    {
        $this->load->view('research_scholors/home');
    }
  
    public function treg()
	{
		$this->load->view('admin/treg');
    }
    public function tradd()
	{
        

        $name=array("tid"=>$this->input->post("tid"),"name"=>$this->input->post("name"),"dob"=>$this->input->post("dob"),"gender"=>$this->input->post("gender"),"qualificn"=>$this->input->post("quali"),"net"=>$this->input->post("net"),"designation"=>$this->input->post("design"),"experience"=>$this->input->post("experience"),"status"=>$this->input->post("status"),"dateofjoin"=>$this->input->post("doj"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone"),"profile"=>"incomplete");
        $this->load->model("adminmodel","",true);
        $r6=$this->adminmodel->trinsert($name);
        //
        $teacher_details=array("uname"=>$this->input->post("tid"),'pswd'=>$this->input->post("dob"),'Type'=>'Teacher');
        $this->load->model("adminmodel","",true);
        $r6=$this->adminmodel->teacher_login($teacher_details);
        if($r6==true)
        {
            
       $this->session->set_flashdata('Success','Teacher Registration Successful');
        }
        else{
            $this->session->set_flashdata('Failed','Failed to register teacher ');
        }
        redirect('Adminctlr/treg');
    

    }
    public function inmark()
	{
                $this->load->model("adminmodel", "", true);
        $data['details'] = $this->adminmodel->course_details();
        $this->load->view('admin/inmark',$data);
    }
     public function timetable()
	{
                $this->load->model("adminmodel", "", true);
        $data['details'] = $this->adminmodel->course_details();
        $this->load->view('admin/timetable',$data);
    }
    public function inadd()
	{
        

        $name=array("course"=>$this->input->post("Course"),"sem"=>$this->input->post("sem"));
        $this->load->model("adminmodel","",true);
        $r9=$this->adminmodel->intinsert($name);
        if($r9==true)
        {
            $this->load->view('admin/inmarkviewlist');
        }
        else{
            echo "not";
        }
    

    }
    

    
    public function addcourse()
	{
		$this->load->view('admin/addcourse');
    }
    public function courseadd()
	{
        

        $name=array("course"=>$this->input->post("course"),"duration"=>$this->input->post("duration"),"semester"=>$this->input->post("semester"));
        $this->load->model("adminmodel","",true);
        $alreadyExist=$this->adminmodel->coursecheck($name);
       if(!$alreadyExist)
        { $r9=$this->adminmodel->courseinsert($name);
        if($r9==true)
        {
             $this->session->set_flashdata('Success','Course Added Successfully');
        }
        else{
            $this->session->set_flashdata('Failed','Failed To Add ');
        }
    }else
    {
        $this->session->set_flashdata('Failed',$name['course']." Already exist");
    }
        redirect('Adminctlr/addcourse');
    }
 
  

    public function registeredstud()
	{
		$this->load->view('admin/registeredstud');
    }
    
    public function registeredteacher()
	{
		$this->load->view('admin/registeredteacher');
    }
    public function attendance()
	{
        $this->load->model("adminmodel","",true);
	$data['details']=$this->adminmodel->course();
		$this->load->view('admin/attendance',$data);
    }
    public function course()
	{
        $this->load->model("adminmodel","",true);
	$data['details']=$this->adminmodel->course();
		$this->load->view('admin/course',$data);
    }
    public function pass_out()
	{
        $this->load->model("adminmodel","",true);
	    $data['details']=$this->adminmodel->pass_out();
        $this->load->view('admin/pass_out',$data);
    }
     public function drop_out()
	{
        $this->load->model("adminmodel","",true);
	    $data['details']=$this->adminmodel->drop_out();
        $this->load->view('admin/drop_out',$data);
    }

    public function passoutview()
	{
		$this->load->view('admin/passoutview');
    }
    public function dropoutview()
	{
		$this->load->view('admin/dropoutview');
    }
   

    
      
      public function passedstud_details()
      {
        
        $this->load->model("adminmodel","",true);
        $data['details']=$this->adminmodel->pass_details();
        $this->load->view('admin/passedstud',$data);     
      }
      
    
      public function passedstud()
      {
          $this->load->view('admin/passedstud');
      }
      public function droppedstud()
      {
          $this->load->view('admin/droppedstud');
      }
      public function student_details()
      {
         $filter = $this->input->post('filter');
        $field  = $this->input->post('field');
        $search = $this->input->post('search');
      

        if (isset($filter) && !empty($search)&& !empty($field)) {
             $this->load->model("adminmodel","",true);
        $data['details']=$this->adminmodel->getStudentsWhereLike($field, $search);
           
            
        } else{
        $this->load->model("adminmodel","",true);
        $data['details']=$this->adminmodel->stud_details();
        }
        $this->load->view('admin/registeredstud',$data);     
      }
      public function teacher_details()
{ 
    
        $filter = $this->input->post('filter');
        $field  = $this->input->post('field');
        $search = $this->input->post('search');
      
        if (isset($filter) && !empty($search)&& !empty($field)) {
         $this->load->model("adminmodel","",true);
        $data['details']=$this->adminmodel->getTeachersWhereLike($field, $search);
             
        } else{
         $this->load->model("adminmodel","",true);
        $data['details']=$this->adminmodel->tcr_details();
        }
             
	$this->load->view('admin/registeredteacher',$data);
}

      
      public function student_password(){
         $this->load->view('admin/change_student_password'); 
      }
      public function teacher_password(){
         $this->load->view('admin/change_teacher_password'); 
      }
              
     
     
      public function change_student_password()
      {
        
        $studentid=$this->input->post("studentid");
        $newpass=$this->input->post("newpass");
        $cnewpass=$this->input->post("confirmpass");
        if(count( $newpass)>0&&  $newpass== $cnewpass)
        {
            $this->load->model("adminmodel","",true);
            $r8=$this->adminmodel->change_stud_pass($studentid,$newpass);
            if($r8==true)
            {
                if($this->input->post("email"))
                {
                    //send email notifications
                    $user=$this->adminmodel->getStudentById($studentid);
                    $this->sendEmail($user->email,'Password Reset: Login Detais','Please find the login details from below <br/> Email: '.$user->email.'<br/> Username: '.$this->input->post("studentid").' <br/> Password: '.$this->input->post("confirmpass"));
                }
                $this->session->set_flashdata('Success','Password changed Successfully');
            }
            else
            {
                $this->session->set_flashdata('Failed','Failed to change password');
            }
        }
        else
            {
                $this->session->set_flashdata('Failed','Passwords are not matching ');
            }

        redirect('Adminctlr/student_password'); 
      }
           public function admin_change_password(){
      
        
        $oldpass=$this->input->post("oldpass");
        $newpass=$this->input->post("confirmpass");
        
        $this->load->model("adminmodel","",true);
	$r8=$this->adminmodel->change_admin_pass($oldpass,$newpass);
	if($r8==true)
	{
            
       $this->session->set_flashdata('Success','Password changed Successfully');
        }
        else{
            $this->session->set_flashdata('Failed','Failed to change password ');
        }
        redirect('Adminctlr/change_password');
      }
     public function change_teacher_password(){
      
        $teacherid=$this->input->post("teacherid");
        $newpass=$this->input->post("newpass");
        $cnewpass=$this->input->post("confirmpass");
        if( $newpass== $cnewpass)
        {
            $this->load->model("adminmodel","",true);
            $r8=$this->adminmodel->change_teacher_pass($teacherid,$newpass);
            if($r8==true)
            {    
                if($this->input->post("email"))
                {
                    //send email notifications
                    $user=$this->adminmodel->getTeacherById($studentid);
                    $this->sendEmail($user->email,'Password Reset: Login Detais','Please find the login details from below <br/> Email: '.$user->email.'<br/> Username: '.$teacherid.' <br/> Password: '.$this->input->post("confirmpass"));
                }
                $this->session->set_flashdata('Success','Password changed Successfully');
            }
            else
                $this->session->set_flashdata('Failed','Failed to change password ');
        
       
      }  else
      
          $this->session->set_flashdata('Failed','Passwords are not matching ');
      
      redirect('Adminctlr/teacher_password');

    }
      public function coursedel()
{
	$this->load->model("adminmodel","",true);
	$data['details']=$this->adminmodel->course_details();
	$this->load->view('admin/coursedel',$data);
}
    public function student_tmtbl()
    {
            $data="";
            $this->load->model("adminmodel","",true);
            $course=$this->input->post("course");
            $semester=$this->input->post("semester");
            if($course && $semester)
            {
                $data['course']=$course;
                $data['semester']=$semester;
                $data['subjects']=$this->adminmodel->getsubjects($course,$semester);
                $data['lecture']=$this->adminmodel->getAllTeachers();
                $timetable=[];
                $result=$this->adminmodel->get_student_timetable($course,$semester);
                foreach ($result as $value)
                {
                    $timetable[$value->weekday][$value->period]=$value->subject.'-'.$value->name;
                }
                $data['table']=$timetable;

            }
            
            $data['details']=$this->adminmodel->course_details();
            $this->load->view('admin/student_timetable',$data);
    }
      public function teacher_tmtbl()
{
$tid=$this->input->get('tid');
if($tid)
{
    $timetable=[];
    $this->load->model("adminmodel","",true);
    $result=$this->adminmodel->get_teacher_timetable($tid);
    foreach ($result as $value) {
        $timetable[$value->weekday][$value->period]=$value->course.'-'.$value->semester.'-'.$value->subject;
        }
    $this->load->view('admin/teacher_timetable',['table'=>$timetable]);
}    
else
    $this->load->view('admin/teacher_timetable',);
}
     
public function courserem()
{
	
	$course=$this->input->post("course");
    //$status="deleted";

	$this->load->model("adminmodel","",true);
	$r9=$this->adminmodel->coursedelete($course);
	if($r9==true)
        {
            
       $this->session->set_flashdata('Success','Course Deleted Successfully');
        }
        else{
            $this->session->set_flashdata('Failed','Failed To Delete ');
        }
        redirect('Adminctlr/coursedel');
}
     public function view_internal(){
      $output  = " ";
      $data=$this->input->get('data');
      list($course,$sem)= explode('|', $data);
    
      $this->load->model("adminmodel","",true);
      $info=$this->adminmodel->get_internals($course,$sem);
   
        $output.='
            
            <table class="table table-bordered table-striped">
                        <tr>
                        <th>Name</th>
                        <th>1st Internal</th>
                        <th>2st Internal</th>
                       <th>3st Internal</th>
                        <th >Final</th>
                        <th>Assignment</th>
                        <th >Seminar</th>
                        <th >Total</th>
                        
                     </tr>'
                  ;
             if(!empty($info)) {
                 foreach($info as $row)
                 {
                     $output.='<tr> <td>' . $row->name . '</td>
                                                <td>' . $row->firstin . '</td>
                                                     <td>' . $row->secondin . '</td>
                                                          <td>' . $row->thirdin . '</td>
                                                               <td>' . $row->final . '</td>
                                                                    <td>' . $row->assignment . '</td>
                                                                         <td>' . $row->seminar . '</td>
                                                                              
                                                <td >' . $row->total . '</td>';



                $output.= '</tr>';
            } }
           else{
               $output.='<tr><td colspan=9>No data found</td></tr>';
                       
           }
           $output.="</table>";
            
    
           echo $output;
                
    }
    public function view_student_timetable(){
      $output  = " ";
      $data=$this->input->get('data');
      list($course,$sem)= explode('|', $data);
    
      $this->load->model("adminmodel","",true);
      $info=$this->adminmodel->get_student_timetable($course,$sem);
   
        $output.='
            
            <table class="table table-bordered table-striped">
                        <tr>
                        <th>#</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                       <th>Thursday</th>
                        <th >Friday</th>
                       
                        
                     </tr>'
                  ;
             if(!empty($info)) {
                 $i=1;
                 foreach($info as $row)
                 {
                     $output.='<tr><td>'.$i.'</td> <td>' . $row->monday . '</td>
                                                <td>' . $row->tuesday . '</td>
                                                     <td>' . $row->wednesday . '</td>
                                                          
                                                                         <td>' . $row->thursday . '</td>
                                                                              
                                                <td >' . $row->friday . '</td>';



                $output.= '</tr>';
                $i++;
            } }
           else{
               $output.='<tr><td colspan=9>TimeTable not set</td></tr>';
                       
           }
           $output.="</table>";
            
    
           echo $output;
                
    }
    public function view_teacher_timetable(){
      $output  = " ";
      $tid=$this->input->get('data');
      
    
      $this->load->model("adminmodel","",true);
      $info=$this->adminmodel->get_teacher_timetable($tid);
   
        $output.='
            
            <table class="table table-bordered table-striped">
                        <tr>
                        <th>#</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                       <th>Thursday</th>
                        <th >Friday</th>
                       
                        
                     </tr>'
                  ;
             if(!empty($info)) {
                 $i=1;
                 foreach($info as $row)
                 {
                     $output.='<tr><td>'.$i.'</td> <td>' . $row->monday . '</td>
                                                <td>' . $row->tuesday . '</td>
                                                     <td>' . $row->wednesday . '</td>
                                                          
                                                                         <td>' . $row->thursday . '</td>
                                                                              
                                                <td >' . $row->friday . '</td>';



                $output.= '</tr>';
                $i++;
            } }
           else{
               $output.='<tr><td colspan=9>TimeTable not set</td></tr>';
                       
           }
           $output.="</table>";
            
    
           echo $output;
                
    }
   
     
    public function view_attendence(){
      $output  = " ";
      $data=$this->input->get('data');
      list($course,$sem)= explode('|', $data);
      $month=date('m');
      if($month<=6){
        $from=date('Y').'-06-01';
      }else
      {
        $from=date('Y')-1;
        $from.='-06-01';
      }
      $this->load->model("adminmodel","",true);
      $info=$this->adminmodel->get_attendence($course,$sem,$from);
      

   $output.='
            
            <table class="table table-bordered table-striped">
                        <tr>
                        <th data-field="id">Register Number</th>
                        <th data-field="name" data-editable="true">Name</th>
                        <th data-field="nwd" data-editable="true">Number of Working Days</th>
                        <th data-field="pd" data-editable="true">Present Days</th>
			<th data-field="ad" data-editable="true">Absent Days</th>
		        <th data-field="tap" data-editable="true">Total Attendance Percentage</th>
      
                     </tr>'
        ;
             if(!empty($info)) {
                 $i=0;
                 foreach($info as $row)
                 {
                     $absent=$row->absent;
                     $no=$row->present/($row->absent+$row->present);
                      $precentage=$no*100;
                   $output.='<tr> <td>' . $row->adno . '</td>
                            <td>' . $row->name . '</td>
                            <td>' . ($row->absent+$row->present). '</td>
                            <td>' . $row    ->present . '</td>
                         
                            <td>'.$absent.'</td>
                           
                            <td >'.round($precentage,2).'</td>';

                $output.= '</tr>';
                $i++;

            } }
           else{
               $output.='<tr><td colspan=9>Attendence not set</td></tr>';
                       
           }
           $output.="</table>";
            
    
           echo $output;
                
    }
     public function student_result(){
      $output  = " ";
      $data=$this->input->get('data');
      list($course,$sem)= explode('|', $data);
    
      $this->load->model("adminmodel","",true);
      $result=$this->adminmodel->student_result($course,$sem);
        
        $output.='
            <div class="table-responsive">
            <table class="table table-bordered table-striped">
                        <tr>
                        <th >Adno</th>
                        <th >Name</th>
                        <th>Status</th>
                        
                       
                     </tr>'
                  ;
             if(!empty($result)) {
                 foreach($result as $row)
                 {
                 $output.='<tr> <td>'. $row->adno.'</td>
                                                <td>'.$row->name.'</td>
                                                <td >
                                                <input type="checkbox" name="id[]" value="'.$row->adno.'"  /> 
                                                ';                                               
                                           
                                                
                                                    ?>
                                                    <!-- <a class="btn btn-primary" id="passout" style="padding:6px;"  data-id="'.$row->adno.'" onClick=" theFunction(this.dataset.id);">'."Passout".'</a><a  class="btn btn-danger" id="dropout" style="margin:5px" onClick="myFunction('.$row->adno.');">'."Dropout".'</a></td> --> 
         <script>




	   </script><?php
                                                                                                      
                                               $output.= '</tr>';
                                               
             } }
           else{
               $output.='<tr><td colspan=9>No data found</td></tr>';
                       
           }
           $output.="</table>";
    
           echo $output;
                
    }

    public function store_result(){
        
        $admissionnumber=($data=$this->input->post('id'));
        $action=($this->input->post('action'));  
        $this->load->model("adminmodel","",true);
switch ($action) {
    case 'pass':
        if($admissionnumber && count($admissionnumber)>0)
        {
            $info=$this->adminmodel->add_result($admissionnumber,[]);
            if($info==true)
            $this->session->set_flashdata('Success','Result Added Successfully');
            else
            $this->session->set_flashdata('Failed','Failed To Add Result ');
        }
        else
        $this->session->set_flashdata('Failed','Please seletect at least one record');
        break;
        case 'fail':
        if($admissionnumber && count($admissionnumber)>0)
        {
            $info=$this->adminmodel->add_result([],$admissionnumber);
            if($info==true)
            $this->session->set_flashdata('Success','Result Added Successfully');
            else
            $this->session->set_flashdata('Failed','Failed To Add Result ');
        }
        else
        $this->session->set_flashdata('Failed','Please seletect at least one record');
        break;
       
    default:
    $this->session->set_flashdata('Failed','Please seletect an action');
        break;
}
        
        redirect('Adminctlr/course_completion');
          
          
    }
        public function store_student_timetable(){
        $course =$this->input->post('course');
        $sem = $this->input->post('semester');
        $weekday=$this->input->post('weekday');
        $period=$this->input->post('period');
        $lecture=$this->input->post('lecture');
        $subject=$this->input->post('subject');

        $this->load->model("adminmodel","",true);   
           
        if($course){
            $data=[];
            $data['course']=$course;
            $data['semester']=$sem;
            $data['weekday']=$weekday;
            $data['period']=$period;
            if($lecture)
            $data['lecture']=$lecture;
            
            $data['subject']=$subject;
            
            $res=$this->adminmodel->store_s_timetable($data);
            if($res==true)
                $this->session->set_flashdata('Success','Timetable Updated Successfully');    
            else
                $this->session->set_flashdata('Failed','Failed To Add Timetable ');
            }
            redirect('Adminctlr/student_tmtbl');
 
          
    }
         public function store_teacher_timetable(){
       
         $tid = $_POST['tid'];
        

        $monday = $_POST['monday'];
        $tuesday = $_POST['tuesday'];
        $wednesday = $_POST['wednesday'];
        $thursday = $_POST['thursday'];
        $friday = $_POST['friday'];
      
        $this->load->model("adminmodel","",true);
        $res=$this->adminmodel->store_t_timetable($tid,$monday,$tuesday,$wednesday,$thursday,$friday);
      
          if($res==true)
	{
            
       $this->session->set_flashdata('Success','Timetable Added Successfully');
        }
        else{
            $this->session->set_flashdata('Failed','Failed To Add Timetable ');
        }
        redirect('Adminctlr/teacher_tmtbl');
          
    }
    public function sendEmail($to,$title='No replay',$message="")
    {
       //Sending mail part
            // Mail will be send if it succeeded
            $this->load->library('email');
            $this->email->from('noreplay@mujawharati.ae');
            $this->email->to($to);// taking emails from the form
            $this->email->subject($title);
            $this->email->message($message);             
            $this->email->send();
        // mail part end
    }
}
 
   