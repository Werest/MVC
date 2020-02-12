<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="name">
            <small id="emailHelp" class="form-text text-muted">Input Name</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <small id="emailHelp" class="form-text text-muted">Input Email</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">File</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file[]">
        </div>
        <button type="button" class="btn btn-primary">Preview</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr>
</div>