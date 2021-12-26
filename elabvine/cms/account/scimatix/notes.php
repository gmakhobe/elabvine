<?php include("../../php/session.php"); ?>
<?php include("php/dashboard.php"); ?>
<?php include("php/account.php"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>

        <title>Notes</title>
        <meta name="description" content="Notes - Members Area">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Headers-->
        <?php include("headers.php"); ?>
        <!--End Headers-->

    </head>
    <body>

        <?php include("header-left.php"); ?>

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <?php include("header-top.php"); ?>

            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Notes</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li>Dashboard</li>
                                <li class="active">Notes</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" data-toggle="modal" data-target="#addNote">Add Note</button>
            <div class="content mt-3">


                <div class="col-lg-12 col-md-12">

                    <div class="card">
                        <div class="card-body" id="notesView">



                        </div>
                    </div>

                </div>

            </div><!-- /#right-panel -->

        </div>


        <!-- Right Panel -->

        <?php include("modals.php"); ?>

        <!--Footer-->
        <?php include("footer.php"); ?>
        <!--End Footer-->
        <script>

            function submitNote() {
                var nt = document.getElementById("note-title").value;
                var nc = document.getElementById("note-content").value;

                if (nt == "" || nc == "") {

                    alertify.alert('Notes', "Please fill in missing fields.", function () {
                        alertify.error('Error!');
                    }).bringToFront();

                } else {

                    var fd = new FormData();
                    fd.append("a3", 1);
                    fd.append("nt", nt);
                    fd.append("nc", nc);

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {

                            if (this.responseText == "success") {

                                document.getElementById('note-title').value = '';
                                document.getElementById('note-content').value = '';

                                showNotes();

                                alertify.alert('Notes', "Noted...<br>Visit notes to view full list.", function () {
                                    alertify.success('Success!');
                                }).bringToFront();

                            } else {

                                alertify.alert('Notes', "Something went wrong please try again.", function () {
                                    alertify.error('Error!');
                                }).bringToFront();

                            }

                        }
                    };
                    xmlhttp.open("POST", "../php/post.php", true);
                    xmlhttp.send(fd);

                }
            }

            function showNotes() {

                var xmlhttp = new XMLHttpRequest();
                var fd = new FormData();
                fd.append("a1", 1);
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        document.getElementById('notesView').innerHTML = "<div class='table-responsive'>" + this.responseText + "</div>";

                    }
                };
                xmlhttp.open("POST", "../php/get.php", true);
                xmlhttp.send(fd);

            }
            showNotes();

            function deleteNote(id) {

                var xmlhttp = new XMLHttpRequest();
                var fd = new FormData();
                fd.append("a4", 1);
                fd.append("id", id);
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                        showNotes();

                    }
                };
                xmlhttp.open("POST", "../php/post.php", true);
                xmlhttp.send(fd);

            }

        </script>

    </body>
</html>
