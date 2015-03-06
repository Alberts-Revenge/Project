<table cols="" border="0">
  <tr>
    <th>Name</th>
    <th>Picture</th>
    <th>Brief</th>
    <th>Description</th>
    <th>Edit</th>
    <th>Remove</th>
  </tr>
  {torturer}
  <tr>
    <td>{name}</td>
    <td><img src="/assets/images/{picture}" height="100" width="100"/></td>
    <td>{brief}</td>
    <td>{description}</td>
    <td><a href='/admin/torturer_edit/{id}' class="btn btn-primary btn-success">Edit</a></td>
    <td><a href='/admin/torturer_remove/{id}' class="btn btn-primary btn-success">Remove</a></td>
    
  </tr>
  {/torturer}
</table> 
<br>
<!--Added new link for adding new Torturer-->
<a href='/admin/torturer_add' class="btn btn-primary btn-success">Add a new Torturer</a>