<div class ="row">
    <div class ="errors">{message}</div>
    <form action ="/admin/jedihunt_confirm/{ID}" method = "post" enctype="multipart/form-data">
        {fname}
        <input type='file' name='userfile' size='20' /> 
        {fbrief}
        {fdescription}
        {fsubmit}
    </form>
</div>
