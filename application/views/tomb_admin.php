<table cols="" border="0">
    <tr>
        <th>Name</th>
        <th>Picture</th>
        <th>Brief</th>
        <th>Description</th>
        <th></th>
        <th></th>
    </tr>
    {tomb}
    <tr>
        <td><a href='/admin/tomb_comment_list/{id}' class="btn btn-primary">{name}</a></td>
        <td><img src="/assets/images/{picture}" height="100" width="100"/></td>
        <td>{brief}</td>
        <td>{description}</td>
        <td><a href='/admin/tomb_edit/{id}' class="btn btn-primary btn-success">Edit</a></td>
        <td><a href='/admin/tomb_remove/{id}' class="btn btn-primary btn-success">Remove</a></td>
    </tr>
    {/tomb}
</table> 
<!--Added new link for adding new Tomb -->
<br>
<a href='/admin/tomb_add' class="btn btn-primary btn-success">Add a new Tomb</a>