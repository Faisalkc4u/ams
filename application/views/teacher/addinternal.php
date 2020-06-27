<?php
$this->load->view('teacher/teacherhome');
<?php 
echo form_open_multipart("teacherctlr/addinternal");
?>
Course<select name="Course" class="" placeholder="" required >
<option value="">Select Course</option>
<option value="MCA(LE)">MCA</option>
<option value="MCA(R)">MCA(LE)</option>
<option value="MSc">MSc</option>
/*<option value="MPhil">MPhil</option>
<option value="PhD">PhD</option>*/
</select><br>
Semester<select name="semes" class="" placeholder="" required >
<option value="">Select Semester</option>
<option value="Semester 1">Semester 1</option>
<option value="Semester 2">Semester 2</option>
<option value="Semester 3">Semester 3</option>
<option value="Semester 4">Semester 4</option>
<option value="Semester 5">Semester 5</option>
<option value="Semester 6">Semester 6</option>
</select><br>
Subject<select name="sub" class="" placeholder="" required >
<option value="">Select Semester</option>
<option value="Visual Cryptography">Visual Cryptography</option>
/*<option value="Semester 2">Semester 2</option>
<option value="Semester 3">Semester 3</option>
<option value="Semester 4">Semester 4</option>
<option value="Semester 5">Semester 5</option>
<option value="Semester 6">Semester 6</option>*/
</select><br>
<input type="submit" value="Click Here" name="ch">
<?php echo form_close();
?>