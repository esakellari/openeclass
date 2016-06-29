<form method='post' action='".esc($_SERVER['PHP_SELF'])."'>
<table class='FormData'>
<tr><th>$langMultiRegFields</th>
    <td><input type='text' name='fields' size='50' value='first last id email phone' /></td>
<tr><th>$langUsersData</th>
    <td><textarea class='auth_input' name='user_info' rows='10' cols='60'></textarea></td>
</tr>
<tr><th>$langMultiRegType</th>
    <td><select name='type'>
        <option value='stud'>$langsOfStudents</option>
        <option value='prof'>$langOfTeachers</option></select></td>
</tr>
<tr><th>$langMultiRegPrefix</th>
    <td><input type='text' name='prefix' size='10' value='user' /></td>
</tr>
<tr><th>$langFaculty</th>
    <td>" . selection($facs, 'facid') . "</td>
</tr>
<tr><th>$langAm</th>
    <td><input type='text' name='am' size='10' /></td>
</tr>
<tr><th>$langLanguage</th>
    <td>" . lang_select_options('lang') . "</td>
</tr>
<tr><th>$langInfoMail</th>
    <td><input name='send_mail' type='checkbox' />
        $langMultiRegSendMail</td>
</tr>
<tr><th>&nbsp;</th>
    <td><input type='submit' name='submit' value='$langSubmit' /></td>
</tr>
</table>
</form>
