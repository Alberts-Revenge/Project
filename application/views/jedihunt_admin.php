<table cols="" border="0">
  <tr>
    <th style="padding-right: 10px">Name</th>
    <th style="padding-right: 10px">Picture</th>
    <th style="padding-right: 10px">Last Known Location</th>
    <th >Description</th>
    <th></th>
    <th></th>
  </tr>
  {jedihunt}
  <tr>
    <td style="padding-right: 20px">{Name}</td>
    <td style="padding-right: 20px"><img src="/assets/images/{Pic}" height="100" width="100"/></td>
    <td style="padding-right: 20px">{Location}</td>
    <td >{Description}</td>
    <td><a href='/admin/jedihunt_edit/{ID}' class="btn btn-primary btn-success">Edit</a></td>
    <td><a href='/admin/jedihunt_remove/{ID}' class="btn btn-primary btn-success">Remove</a></td>
    
  </tr>
  {/jedihunt}
</table> 
<br>
<!--Added new link for adding new Torturer-->
<a href='/admin/jedihunt_add' class="btn btn-primary btn-success">Add a new Jedi!</a>