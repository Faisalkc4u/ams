
<?php 
echo form_open("studentctlr/time");
?>
<table id="table" border=1 data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="" data-show-refresh="" data-key-events="" data-show-toggle="true" data-resizable="" data-cookie=""
                                        data-cookie-id-table="" data-show-export="" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <!--<th data-field="" data-checkbox=""></th>-->
                                                <th data-field="id"><center>Day</center></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <th data-field="name" data-editable="true"><center>First Hour</center></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <th data-field="course" data-editable="true"><center>Second Hour</center></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <th data-field="semester" data-editable="true"><center>Third Hour</center></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<th data-field="subject1" data-editable="true"><center>Fourth Hour</center></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<th data-field="subject2" data-editable="true"><center>Fifth Hour</center></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <td>Monday</td>
                                                <td>VC</td>
                                                <td>VC</td>
                                                 <td>Cloud</td>
                                                 <td>Cyber</td>
                                                 <td>Cyber</td>
												 <td><input type="submit" value="Edit"><a href=""></td>
                                                 </tr>
                                                 </tbody>  
                                                 </table>
                                                 <?php echo form_close();
                                                 ?>