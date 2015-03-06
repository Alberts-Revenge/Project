<!--using formfields helper to style the form-->
<h1>{name}</h1>
<div class="row">
    <!--error message formating-->
    <div class="errors">{message}</div>
    <form action="/tombs/confirm/{tombid}" method="post">
        {fcomment}
        {fsubmit}
    </form>
</div>