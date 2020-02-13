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
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file[]" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);" />
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Preview</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Preview</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                <h5 class="card-header p-2"><p id="name_p"></p></h5>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p id="message_p"></p>
                            <img class="w-25 p-3 card-img-top" id="img_modal">
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'views/view_ms.php';




