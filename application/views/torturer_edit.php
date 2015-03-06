<div class ="row">
    <div class ="errors">{message}</div>
    <form action ="/admin/torturer_confirm/{id}" method = "post" enctype="multipart/form-data">
        {fname}
        <input type='file' name='userfile' size='20' /> 
        {fbrief}
        {fdescription}
        {fsubmit}
    </form>
</div>
