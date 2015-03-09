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
<!--<div class="row">
    error message formating
    <div class="errors">{message}</div>
    <form action="/tombs/confirm/{tombid}" method="post">
        {fcomment}
        {fsubmit}
    </form>
</div>-->

<div class="row">
    <form role="form" id="frmArticle" class="form" action="/tombs/confirm/{tombid}" method="POST">
        <lablel>Title</lablel><p>
        <input type="text" name="title" class="form-control"></p>   
        <lablel>Content</lablel><p>
        <textarea id="article" name="article" rows="8" class="form-control"></textarea></p>
        <input class="btn btn-info btn-block" type="submit" value="Add new article" name="submit">
    </form>
</div>