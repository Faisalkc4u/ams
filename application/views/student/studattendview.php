
<?php 
echo form_open_multipart("studentctlr/attendview");
?>
<table id="table" border=1 data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="" data-show-refresh="" data-key-events="" data-show-toggle="true" data-resizable="" data-cookie=""
data-cookie-id-table="" data-show-export="" data-click-to-select="true" data-toolbar="#toolbar">
<thead>
    <tr>
        <!--<th data-field="" data-checkbox=""></th>-->
        <th data-field="month"><center>Month</center></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <th data-field="Number of working days" data-editable="true"><center>Number of Working Days</center></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <th data-field="Present Days" data-editable="true"><center>Present</center></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <th data-field="Absent Days" data-editable="true"><center>Absent</center></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <th data-field="Total Attendance Percentage<th data-field="subject2" data-editable="true"><center>Totaal Attendance Percentage</center></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <th data-field="action">Action</th>
</thead>
<tbody>
<?php 
echo form_open("studentctlr/attend");
?>
<table id="table" border=1 data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="" data-show-refresh="" data-key-events="" data-show-toggle="true" data-resizable="" data-cookie=""
data-cookie-id-table="" data-show-export="" data-click-to-select="true" data-toolbar="#toolbar">
<thead>
    <tr>
        <!--<th data-field="" data-checkbox=""></th>-->
        <th data-field="month"><center>Month</center></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <th data-field="Number of working days" data-editable="true"><center>Number of Working Days</center></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <th data-field="Present Days" data-editable="true"><center>Present Days</center></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <th data-field="Absent Days" data-editable="true"><center>Absent Days</center></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <th data-field="Total Attendance Percentage" data-editable="true"><center>Total Attendance Percentage</center></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <th data-field="action">Action</th>
</thead>
<tbody>
<tr>
<td>January</td>
<td>20</td>
<td>18</td>
 <td>2</td>
 <td>98%</td>
 <td><input type="submit" value="Send Complaint"><a href=""></td>
 </tr>
 </tbody>  
 </table>
<?php echo form_close();
?>
