<!-- Tutors List -->
<div class="modal fade" id="tutorListModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tutors</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body pre-scrollable">
                <div id="list-potentialTutorsAssignment"></div>
                
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<!-- End Tutors List -->  
<div class="modal" id="colorEditor">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Color Editor</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <label>Color:</label>
                <input type="color" class="form-control" id="upload-color"/>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="uploadImage()">Submit</button>
            </div>

        </div>
    </div>
</div>
<div class="modal" id="uploadImage">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Upload Image</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <label>Image:</label>
                <input type="file" class="form-control" id="upload-image"/>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="uploadImage()">Submit</button>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Add A User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="reg-namesurname" class="form-control-label">Name and Surname</label></div>
                    <div class="col-12 col-md-9"><input id="reg-namesurname" placeholder="Name and Surname" class="form-control" type="text"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="reg-phone" class="form-control-label">Phone Number</label></div>
                    <div class="col-12 col-md-9"><input id="reg-phone" placeholder="Phone Number" class="form-control" type="tel"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="reg-emailaddress" class="form-control-label">Email Address</label></div>
                    <div class="col-12 col-md-9"><input id="reg-emailaddress" placeholder="Email Address" class="form-control" type="email"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="reg-password" class="form-control-label">Password</label></div>
                    <div class="col-12 col-md-9"><input id="reg-password" placeholder="Password" class="form-control" type="text"></div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                <button onclick="userRegistration()" data-dismiss="modal" class="btn btn-primary"> Add</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addNote" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Add Note</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col col-md-3"><label for="note-title" class="form-control-label">Title</label></div>
                    <div class="col-12 col-md-9"><input id="note-title" placeholder="Title" class="form-control" type="text"></div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="note-content" class="form-control-label">Content</label></div>
                    <div class="col-12 col-md-9"><textarea id="note-content" id="textarea-input" rows="2" placeholder="Content..." class="form-control"></textarea></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                <button onclick="submitNote()" data-dismiss="modal" class="btn btn-primary"><i class="fa fa-dot-circle-o"></i> Save Note</button>
            </div>
        </div>
    </div>
</div>