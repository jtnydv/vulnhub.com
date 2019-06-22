<style>
     table th{ white-space: nowrap !important; }
    table td{ padding: 5px !important; font-size: 12px; border: 0px !important; }
</style>
<form method="post" class="form" id="form" name="form" >
    <div class="buttons" style="position:absolute; top:20px; right: 20px; z-index: 2;" >
        <input class="button_form" type="button" value="Next" onclick="SubmitForm('data_base_configuration')" />
    </div>
    <div class="section" style="margin: 10px 0px;"><div></div><span>Check important info</span></div>
    <div class="info_message">
        If any of these items is not supported then please take actions to correct them. Failure to do so could lead to your Only-Back installation not functioning correctly
    </div>
    <div style="height:20px;"></div>
    <table class="table_info">
        <tr>
            <th style="width:250px;">Requiered</th>
            <th>Supported</td>
        </tr>
        <tr>
            <td>Configuration.php Writeable</td>
            <td><font style='color:#CC0000'>No</font></td>
        </tr>
        <tr>
            <td>PHP Version >= 5.3</td>
            <td><font style='color:#46882B'>Yes</font></td>
        </tr>
        <tr>
            <td>MySQL Support</td>
            <td><font style='color:#46882B'>Yes</font></td>
        </tr>
        <tr>
            <td>JSON Support</td>
            <td><font style='color:#46882B'>Yes</font></td>
        </tr> 
    </table>
    <table class="table_info" style="margin-top: 20px;">
        <tr>
            <th style="width:250px;">Apache configuration</td>
            <th style="width:180px;" >Recomended</th>
            <th>Now</th>
        </tr>
        <tr>
            <td >File Uploads</td>
            <td ><font style='color:#46882B'>On</font></td>
            <td><font style='color:#46882B'>On</font></td>
        </tr>
        <tr>
            <td style="font-weight:normal">Display Errors</td>
            <td><font style='color:#46882B'>Off</font></td>
            <td><font style='color:#46882B'>Off</font></td>
        </tr>
    </table>
    <input type="hidden" name="view" id="view" value="data_base_configuration" />
</form>
<script>
	function SubmitForm(task){
		jQuery('#view').attr('value',task);
		jQuery('#form').submit();
	}
</script>