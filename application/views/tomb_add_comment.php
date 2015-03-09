<!--using formfields helper to style the form-->
<table cols="" border="0">
    <tr>
        <th>Name</th>
        <th>Picture</th>
        <th>Brief</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>{name}</td>
        <td><img src="/assets/images/{picture}" height="100" width="100"/></td>
        <td>{brief}</td>
        <td>{description}</td>
    </tr>
</table> 
<div class="row">
    <!--error message formating-->
    <div class="errors">{message}</div>
    <form action="/tombs/confirm/{tombid}" method="post">
        {fcomment}
        {fsubmit}
    </form>
</div>