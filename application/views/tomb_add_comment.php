<!--using formfields helper to style the form-->

<div class="row">
    <!--error message formating-->
    <div class="errors">{message}</div>
    <form action="/tombs/add_comment" method="post">
        {fname}
        {fcomment}
        {fsubmit}
    </form>
</div>