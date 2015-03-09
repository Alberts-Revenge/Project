<table cols="" border="0">
    <tr>
        <td ><img src="/assets/images/{picture}" height="70" width="70"></td>
    </tr>
</table>
<table cols="" border="0">
    <tr>
        <td><h1>{name}</h1></td>        
    </tr>
    <tr>
        <th>{description}</th>
    </tr>
    <tr>
        <td><h1>Comments</h1></td>
    </tr>
    {allcomments}
    <tr>
        <td>{comment}</td>
    </tr>
    {/allcomments}
</table> 
<br>
<a href='/tombs/add_comment/{id}'><button class="btn btn-primary btn-success">New Comment</button></a>