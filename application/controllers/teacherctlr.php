<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class teacherctlr extends CI_Controller {

    
    public function internal_marks(){
        $this->load->model("adminmodel","",true);
        $data['details']=$this->adminmodel->course_details();
        if($this->input->get("adno"))
        {
            $this->load->model("adminmodel","",true);
            $data['student']=$this->adminmodel->getStudentById($this->input->get("adno"));
        }
        $this->load->view('teacher/internal_marks',$data);
    }
    public function time_table(){
        
        $tid=$this->session->userdata('tid');
        $timetable=[];
        $this->load->model("adminmodel","",true);
        $result=$this->adminmodel->get_teacher_timetable($tid);
        foreach ($result as $value) {
            $timetable[$value->weekday][$value->period]=$value->course.'-'.$value->semester.'-'.$value->subject;
            }
        $this->load->view('teacher/timetable',['table'=>$timetable]);
    }
       public function assignment(){
        $this->load->model("adminmodel","",true);
	$data['details']=$this->adminmodel->course_details();
        $this->load->view('teacher/assignment',$data);
    }
    public function attendence()
    {
            $this->load->model("adminmodel","",true);
	        $data['details']=$this->adminmodel->course_details();
            $this->load->view('teacher/attendence',$data);
    }
       public function display_attendence(){
        $this->load->model("adminmodel","",true);
	$data['details']=$this->adminmodel->course_details();
        $this->load->view('teacher/view_attendence',$data);
    }

    public function change_password()
{
    $this->load->view('teacher/change_password');
}
    public function teacher_profile()
    {

        $this->load->model("teachermodel","",true);
        $data['details']=$this->teachermodel->teacher_details();
          
              $this->load->view('teacher/teacherprofile',$data);  
          
        
    }

    public function update_trprofile(){
      
        $data=array("address"=>$this->input->post("address"),
        "district"=>$this->input->post("dist"),
        "nationality"=>$this->input->post("nationality"),
        "aadhar"=>$this->input->post("aadhar"),
        "sslcmark"=>$this->input->post("sslc"),
        "plustwostream"=>$this->input->post("plustream"),
        "plustwomark"=>$this->input->post("plusmark"),
        "degreestream"=>$this->input->post("dstream"),
        "degreemark"=>$this->input->post("degree"),
        "uguniversity"=>$this->input->post("uguni"),
        "pgstream"=>$this->input->post("pgstream"),
        "pgmark"=>$this->input->post("pg"),
        "pguniversity"=>$this->input->post("pguni"),
        "otherquali"=>$this->input->post("oquali"),
        "mphil"=>$this->input->post("mquali"),
        "phd"=>$this->input->post("phdquali")
            );
        $this->load->model("teachermodel","",true);
        $result=$this->teachermodel->update_register($data);
        
        $teacher= $this->teachermodel->teacher_details();
        foreach ($teacher as $teacherinfo) {
           if($teacherinfo->qualificn && $teacherinfo->experience&& $teacherinfo->gender&& $teacherinfo->address&& $teacherinfo->district&& $teacherinfo->nationality&& $teacherinfo->aadhar&& $teacherinfo->phd&& $teacherinfo->mphil&& $teacherinfo->status)
           {
             $this->teachermodel->completed_teacher_profile();
           }
        }
     if($result==true)
        {
            $this->session->set_flashdata('Success','Profile updated successfully');
        }
            
        else{
            $this->session->set_flashdata('Failed','Profile updation unsuccessful');
            }
        
          ?>
	   <script>
	  
	    window.location="<?php echo base_url();?>index.php/teacherctlr/teacher_profile";
	   </script>
	   <?php
        }
    public function send_email(){
        $this->load->helper('url'); 
        $to_email = $this->input->post('to');
        $from_email = $this->input->post('from');
         $sub = $this->input->post('sub');
        $msg = $this->input->post('msg');
        $pass = "athulya";
      
        $this->load->library('email');
        
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = $from_email; 
        $config['smtp_pass'] = $pass; 
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; 
        $config['crlf'] = "\r\n";
         
        
          $this->email->initialize($config);
        
        $this->email->from($from_email,'Shalini');
        $this->email->to($to_email);
         $this->email->subject($sub);
        $this->email->message($msg);
        if($sub!=""){
           $this->session->set_flashdata('Success','Email send successfully');
      }
      
      else{
            $this->session->set_flashdata('Failed','Failed To send');
        }
            
            $this->load->view('teacher/change_password');
        }
    public function home(){
       $this->load->view('teacher/teacherhome');  
    }
    public function addinternal_marks(){
    $marks=array(
        "regno"=>$this->input->post("adno"),
        "name"=>$this->input->post("name"),
        "semester"=>$this->input->post("semester"),
        "course"=>$this->input->post("course"),
        "subject"=>$this->input->post("subject"),
        "min_marks"=>$this->input->post("minmark"),
        "max_mark"=>$this->input->post("maxmark"),
        "firstin"=>$this->input->post("firstin"),
        "secondin"=>$this->input->post("secondin"),
        "thirdin"=>$this->input->post("thirdin"),
        "seminar"=>$this->input->post("seminar"),
        "assignment"=>$this->input->post("assignment"),
        "total"=>$this->input->post("total"));
        $this->load->model("teachermodel","",true);
        $r7=$this->teachermodel->internal_mark($marks); 
         if ($r7==true) 
            {
           $this->session->set_flashdata('Success','Internals added successfully');
      }
      
      else{
            $this->session->set_flashdata('Failed','Failed to add internals');
        }
        $this->load->view('teacher/internal_marks');
    }
        public function add_assignment(){
    $assignment=array(
     
        "semester"=>$this->input->post("semester"),
        "course"=>$this->input->post("course"),
        "subject"=>$this->input->post("subject"),
        "date_post"=>  date("Y-m-d"),
        "assignment"=>$this->input->post("assignment"),
        "date_submit"=>$this->input->post("date_of_submit"));
        $this->load->model("teachermodel","",true);
        $r7=$this->teachermodel->add_assignment($assignment); 
        if ($r7==true) 
            {
           $this->session->set_flashdata('Success','Asssignment added successfully');
      }
      
      else{
            $this->session->set_flashdata('Failed','Failed to add assignments');
        }
            $this->load->view('teacher/assignment');
        
    }
   public function add_attendence(){
      $output  = "";
      $data=$this->input->get('data');
        list($course,$sem,$period,$date)= explode('|', $data);
      $this->load->model("teachermodel","",true);
      $result=$this->teachermodel->get_students($course,$sem);
   
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
                                                <td ><a class="btn btn-primary" id="present" style="padding:6px;"  data-id="'.$row->adno.'"onClick=" return theFunction(this.dataset.id);">'."present".'</a><a  class="btn btn-danger" id="absent" style="margin:5px" onClick="myFunction('.$row->adno.');">'."absent".'</a></td>';                                               
                                           
                                                
                                                    ?> 
<script>
    var present = [];
var absent=[];
     function theFunction(adno){
      if(adno==''||adno==null){
          return present;
      }
//         document.getElementById('present').style.color="blue"; 
            present.push(adno);
            
     }

     function myFunction(adno){ 
         if(adno==''||adno==null){
          return absent;
      }
//          document.getElementById('absent').style.color="blue"; 
         absent.push(adno);
        
         return absent;
        }
       function storeAttendence(){ 
         var period="<?php echo $period; ?>";
         var present=theFunction();
        
         var absent=myFunction();
        
      window.location="<?php echo base_url();?>index.php/teacherctlr/store_attendence?period="+period+"|"+present+"|"+absent;
      }
        
	   </script><?php
                                                                                                      
                                               $output.= '</tr>';
             } }
           else{
               $output.='<tr><td colspan=9>No data found</td></tr>';
                       
           }
           $output.="</table>";
            $output.='<input type=submit onClick="storeAttendence('.$period.');">';
    
           echo $output;
                
    }

    public function store_attendence(){
        $data=$_GET['period'];
  
        list($period,$present,$absent)= explode('|', $data);

         $this->load->model("teachermodel","",true);
         $info=$this->teachermodel->add_attendence($period,$present,$absent);
         if($info==true)
              {
           $this->session->set_flashdata('Success','Attendence added successfully');
      }
      
      else{
            $this->session->set_flashdata('Failed','Failed to add attendence');
        }
	
           ?>
	   <script>
	 
	   window.location="<?php echo base_url();?>index.php/teacherctlr/attendence";
	   </script>
	   <?php
    }
    public function view_attendence(){
      $output  = " ";
      $data=$this->input->get('data');
      list($course,$sem)= explode('|', $data);
    
      $this->load->model("adminmodel","",true);
      $info=$this->adminmodel->get_attendence($course,$sem);
      $ar=array();
       if(!empty($info)) {
      foreach($info as $r){
         
          $this->db->where('name' , $r->name);
           $this->db->where(('status' == 'present'));
        $a=$this->db->get('attendence')->num_rows();
        array_push($ar, $a);
        
      }
       }
  $total_days=190;
  
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
                     $absent=$total_days-$ar[$i];
                     $no=$ar[$i]/$total_days;
                      $precentage=$no*100;
                   $output.='<tr> <td>' . $row->adno . '</td>
                            <td>' . $row->name . '</td>
                            <td>' . $total_days. '</td>
                            <td>' . $ar[$i] . '</td>
                         
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
    

}