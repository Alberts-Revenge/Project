<table cols="" border="0">
    <tr>
        <td ><img src="/assets/images/{picture}"</td>
    </tr>
</table>
<table cols="" border="0">
    <tr>
        <td><h1>{name}</h1></td>        
    </tr>
    <tr>
        <td>{description}</td>
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