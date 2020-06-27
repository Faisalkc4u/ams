<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class studentctlr extends CI_Controller {

    public function studhome()
    {
        $this->load->view('student/studhome');
    }

  /*  public function profile()
    {
        
        $this->load->view('student/profile');
    }
    */
     public function research_home(){
        $this->load->view('research_scholors/home');
    }
     public function research_change_password(){
        $this->load->view('research_scholors/change_password');
    }
    public function research_profile(){
         $this->load->model("studentmodel","",true);
        $data['details']=$this->studentmodel->student_details();
         foreach($data as $r=>$value){
            foreach ($value as $v){
                
            if($v->status=="complete"){
                $this->load->view('research_scholors/editprofile',$data);
            }
            else{
              $this->load->view('research_scholors/studentprofile',$data);  
            }
            }
        }
    }
    public function timetable()
    {
     $this->load->model("adminmodel","",true);
	$data['details']=$this->adminmodel->course_details();
        $this->load->view('student/timetable',$data);
    }
    public function studattend()
    {
        $this->load->model("adminmodel","",true);
	$data['details']=$this->adminmodel->course_details();
        $this->load->view('student/studattend',$data);
    }
    
     public function assignment()
    {
        $this->load->model("adminmodel","",true);
	$data['details']=$this->adminmodel->course_details();
        
        $this->load->view('student/assignment',$data);
    }
    public function internals()
    {
        $this->load->model("adminmodel","",true);
	$data['details']=$this->adminmodel->course_details();
        
        $this->load->view('student/internal',$data);
    }
    public function leaveapply()
    {
        $this->load->model("adminmodel","",true);
	$data['details']=$this->adminmodel->course_details();
        $this->load->view('student/leaveapply',$data);
    }
    public function deptstudent()
    {
        
        $this->load->view('student/deptstudent');
    }
    
    public function studfacilities()
    {
        
        $this->load->view('student/studfacilities');
    }
    public function reshome()
    {
        
        $this->load->view('student/reshome');
    }
    public function student_profile()
    {
        
        $this->load->model("studentmodel","",true);
        $data['details']=$this->studentmodel->student_details();
        $this->load->view('student/studentprofile',$data);  
    }
    
    public function update_studprofile(){
      
            $data=array("address"=>$this->input->post("address"),
            "district"=>$this->input->post("dist"),
            "nationality"=>$this->input->post("nationality"),
            "aadharno"=>$this->input->post("aadhar"),
            "guardname"=>$this->input->post("gname"),
            "gphone"=>$this->input->post("gphone"),
            "annualincome"=>$this->input->post("annual"),
            "sslcmark"=>$this->input->post("sslc"),
           
            
           
            "plustwo"=>$this->input->post("plusmark"),
            
            "degreesub"=>$this->input->post("dstream"),
            "degreemark"=>$this->input->post("dgree"),
            "university"=>$this->input->post("uguni"),
            "yearofpass"=>  $this->input->post("yop"),
            "status"=>"complete",
   
      );
        $this->load->model("studentmodel","",true);
        $result=$this->studentmodel->update_registerstud($data);
        if($result==true)
          {
            $this->session->set_flashdata('Success','Profile updated successfully');
        }
            
        else{
            $this->session->set_flashdata('Failed','Profile updation unsuccessful');
            }
        
          ?>
	   <script>
	  
	    window.location="<?php echo base_url();?>index.php/studentctlr/student_profile";
	   </script>
	   <?php
        }
        public function edit_studprofile(){
      
            $data = array("address" => $this->input->post("address"),
            "district" => $this->input->post("dist"),
            "nationality" => $this->input->post("nationality"),
            "aadharno" => $this->input->post("aadhar"),
            "guardname" => $this->input->post("gname"),
            "gphone" => $this->input->post("gphone"),
            "annualincome" => $this->input->post("annual"),
            "sslcmark" => $this->input->post("sslc"),
            "plustwo" => $this->input->post("plusmark"),
            "degreesub" => $this->input->post("dstream"),
            "degreemark" => $this->input->post("dgree"),
            "university" => $this->input->post("uguni"),
             "yearofpass"=>  $this->input->post("yop"),
               "email"=>$this->input->post("email"),
                "phone"=>$this->input->post("phone"),
        );
        $this->load->model("studentmodel","",true);
        $result=$this->studentmodel->update_registerstud($data);
        if($result==true)
        {
            $this->session->set_flashdata('Success','Profile updated successfully');
        }
            
        else{
            $this->session->set_flashdata('Failed','Profile updation unsuccessful');
            }
        
          ?>
	   <script>
	  
	    window.location="<?php echo base_url();?>index.php/studentctlr/student_profile";
	   </script>
	   <?php
        }
        public function send_email(){
        $this->load->helper('url'); 
        $to_email = $this->input->post('to');
        $from_email = $this->input->post('from');
         $sub = $this->input->post('subject');
        
        $msg = $this->input->post('message');
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
            $this->load->view('student/change_password');
        }

            public function change_password()
{
    $this->load->view('student/change_password');
}
      public function view_internal(){
      $output  = " ";
      $data=$this->input->get('data');
      list($course,$sem)= explode('|', $data);
    
      $this->load->model("studentmodel","",true);
      $info=$this->studentmodel->get_internals($course,$sem);
   
        $output.='
            <div class="table-responsive">
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
          public function view_attendence(){
      $output  = " ";
      $data=$this->input->get('data');
      list($course,$sem)= explode('|', $data);
    
      $this->load->model("studentmodel","",true);
      $info=$this->studentmodel->get_attendence($course,$sem);
  
  $total_days=190;
//  $days=$info/5;
  $count=$info/$total_days;
  $average_attendence=$count*100;
             if(!empty($info)) {
                 $output= '<p style="color:black;font-size: 20px;">Your Attendence percentage for this semester is <span style="color:blue">' .round($average_attendence,2) . '</span></p></td>';
                 
             }
           else{
               $output.='<p style="color:black;font-size: 20px;">Your attendence percentage is not currently avaliable</p>';
                       
           }
          
            
    
           echo $output;
                
    }
    public function view_assignment(){
      $output  = " ";
      $data=$this->input->get('data');
      list($course,$sem)= explode('|', $data);
    
      $this->load->model("studentmodel","",true);
      $info=$this->studentmodel->get_assignment($course,$sem);
   
        $output.='
            <div class="table-responsive">
            <table class="table table-bordered table-striped">
                        <tr>
                        <th>Subject</th>
                        <th>Topic</th>
                       
                        <th >Date of post</th>
                        <th >Date Of Submission</th>
                        
                     </tr>'
                  ;
             if(!empty($info)) {
                 foreach($info as $row)
                 {
                     $output.='<tr> <td>' . $row->subject. '</td>
                                                <td>' . $row->assignment . '</td>
                                                  
                                                <td>' . $row->date_post . '</td>
                                                                              
                                                <td >' . $row->date_submit . '</td>';



                $output.= '</tr>';
            } }
           else{
               $output.='<tr><td colspan=9>No data found</td></tr>';
                       
           }
           $output.="</table>";
            
    
           echo $output;
                
    }
        public function view_timetable(){
      $output  = " ";
      $data=$this->input->get('data');
      list($course,$sem)= explode('|', $data);
    
      $this->load->model("studentmodel","",true);
      $info=$this->studentmodel->get_timetable($course,$sem);
   
        $output.='
             <h3 style="color:blue" >Your current time table</h3> 
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
        public function apply_leave(){
      
            $data=array("adno"=>$this->input->post("adno"),
            "name"=>$this->input->post("name"),
            "course"=>$this->input->post("course"),
            "semester"=>$this->input->post("sem"),
            "startdate"=>$this->input->post("startdate"),
            "enddate"=>$this->input->post("enddate"),
            "no_of_days"=>$this->input->post("nos"),
            
   
      );
        $this->load->model("studentmodel","",true);
        $result=$this->studentmodel->apply_leave($data);
        if($result==true)
        {
            $this->session->set_flashdata('Success','LeaveApplication send successfully');
        }
            
        else{
            $this->session->set_flashdata('Failed','LeaveApplication sending unsuccessful');
            }
        
          ?>
	   <script>
	  
	    window.location="<?php echo base_url();?>index.php/studentctlr/leaveapply";
	   </script>
	   <?php
        }
          
    public function update_researchprofile(){
      
            $data=array("address"=>$this->input->post("address"),
            "district"=>$this->input->post("dist"),
            "nationality"=>$this->input->post("nationality"),
            "aadharno"=>$this->input->post("aadhar"),
            "guardname"=>$this->input->post("gname"),
            "gphone"=>$this->input->post("gphone"),
            "annualincome"=>$this->input->post("annual"),
            "sslcmark"=>$this->input->post("sslc"),
           
            
           
            "plustwo"=>$this->input->post("plusmark"),
            
            "degreesub"=>$this->input->post("dstream"),
            "degreemark"=>$this->input->post("dgree"),
            "university"=>$this->input->post("uguni"),
            "yearofpass"=>  $this->input->post("yop"),
             "pgsub"=>  $this->input->post("pgsub"),
             "pgmark"=>  $this->input->post("pgmark"),
             "pguni"=>  $this->input->post("pguni"),   
            "net"=>  $this->input->post("net"),
             "mphilareaspec"=>  $this->input->post("mphilareaspec"),
             "mphilmark"=>  $this->input->post("mphilmark"),
              "phdareaspec"=>  $this->input->post("phdareaspec"),
                
            "status"=>"complete",
   
      );
        $this->load->model("studentmodel","",true);
        $result=$this->studentmodel->update_registerstud($data);
        if($result==true)
          {
            $this->session->set_flashdata('Success','Profile updated successfully');
        }
            
        else{
            $this->session->set_flashdata('Failed','Profile updation unsuccessful');
            }
        
          ?>
	   <script>
	  
	    window.location="<?php echo base_url();?>index.php/studentctlr/research_profile";
	   </script>
	   <?php
        }
        public function edit_researchprofile(){
      
            $data = array("address" => $this->input->post("address"),
            "district" => $this->input->post("dist"),
            "nationality" => $this->input->post("nationality"),
            "aadharno" => $this->input->post("aadhar"),
            "guardname" => $this->input->post("gname"),
            "gphone" => $this->input->post("gphone"),
            "annualincome" => $this->input->post("annual"),
            "sslcmark" => $this->input->post("sslc"),
            "plustwo" => $this->input->post("plusmark"),
            "degreesub" => $this->input->post("dstream"),
            "degreemark" => $this->input->post("dgree"),
            "university" => $this->input->post("uguni"),
             "yearofpass"=>  $this->input->post("yop"),
                 "pgsub"=>  $this->input->post("pgsub"),
             "pgmark"=>  $this->input->post("pgmark"),
             "pguni"=>  $this->input->post("pguni"),   
            "net"=>  $this->input->post("net"),
             "mphilareaspec"=>  $this->input->post("mphilareaspec"),
             "mphilmark"=>  $this->input->post("mphilmark"),
              "phdareaspec"=>  $this->input->post("phdareaspec"),
               "email"=>$this->input->post("email"),
                "phone"=>$this->input->post("phone"),
        );
        $this->load->model("studentmodel","",true);
        $result=$this->studentmodel->update_registerstud($data);
        if($result==true)
        {
            $this->session->set_flashdata('Success','Profile updated successfully');
        }
            
        else{
            $this->session->set_flashdata('Failed','Profile updation unsuccessful');
            }
        
          ?>
	   <script>
	  
	    window.location="<?php echo base_url();?>index.php/studentctlr/research_profile";
	   </script>
	   <?php
        }
    }
