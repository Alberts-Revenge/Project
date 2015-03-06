<table cols="" border="0">
    <tr>
        <th>Name</th>
        <th>Picture</th>
        <th>Brief</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Remove</th>
    </tr>
    {tomb}
    <tr>
        <td><a href='/admin/tomb_comment_list/{id}'</a>{name}</td>
        <td><img src="/assets/images/{picture}" height="100" width="100"/></td>
        <td>{brief}</td>
        <td>{description}</td>
        <td><a href='/admin/tomb_edit/{id}'>Edit</a></td>
        <td><a href='/admin/tomb_remove/{id}'>Remove</a></td>
    </tr>
    {/tomb}
</table> 
<!--Added new link for adding new Tomb -->
<br>
<a href='/admin/tomb_add'>Add a new Tomb</a>