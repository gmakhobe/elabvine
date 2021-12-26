<?php
if (!isset($_REQUEST["userId"]) || $_REQUEST["userId"] == 0 || $_REQUEST["userId"] == "") {
    $redirect = 1;
} else {
    //do not redirect
    $redirect = 0;
    //uSER UD
    $userId = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST["userId"]);
    //User name 
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `scimatix_members_information` WHERE Id = '$userId';");
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $name = $row["Name"] . " " . $row["Surname"];
}
?>

<a href="javascript:window.history.back()" class="btn btn-outline-primary btn-lg btn-block">Back To Main View</a>

<br>


<div class="alert alert-info alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Notify User!</strong> Send <?php echo $name; ?> a notification / message. Recipient will also receive an email notification.
</div>
<hr>
<div class="row form-group">
    <div class="col col-md-3"><label for="note-title" class="form-control-label">Title</label></div>
    <div class="col-12 col-md-9"><input id="not-title" placeholder="Title" class="form-control" type="text"></div>
</div>
<div class="row form-group">
    <div class="col col-md-3"><label for="note-content" class="form-control-label">Content</label></div>
    <div class="col-12 col-md-9"><textarea id="not-content" id="textarea-input" rows="2" placeholder="Content..." class="form-control"></textarea></div>
</div>
<br>
<button onclick="sendNotification()" data-dismiss="modal" class="btn btn-success"><i class="fa fa-comments-o"></i> Send </button>

<input value="<?php echo $userId; ?>" id="userId" type="text" hidden="">
<hr>

<div class="col-lg-12 col-md-12">

    <div class="card">
        <div class="card-header">Sent Notifications</div>
        <div class="card-body" >
            <div class="table-responsive">
                <div id="table-notifications"></div>
            </div>
        </div>
    </div>

</div>
<script>
    //Redirect if no Id
    var $num = <?php echo $redirect; ?>;
    if ($num == 1) {
        window.location.assign("users-one.php");
    }
    //Notification Delete
    function deleteNotification($id) {
        //Post
        $.post("../php/post.php",
                {
                    a18: 1,
                    id: $id
                },
                function (data, status) {
                    var $data = data.replace(/ /g, "");
                    if ($data == "success") {
                        alertify.alert("Alert", "Notification Successfully deleted.");
                        showNotification();
                    } else {
                        alertify.alert("Alert", "An error occure please retry!");
                    }
                });

    }
    //Show all notifications
    function showNotification() {
        //Post
        $.post("../php/get.php",
                {
                    a15: 1
                },
                function (data, status) {
                    $("#table-notifications").html(data);
                });

    }
    showNotification();
    //Send Notification
    function sendNotification() {
        //Values
        var $title = $("#not-title").val();
        var $message = $("#not-content").val();
        var $id = $("#userId").val();
        //if Empty
        if ($title == "" || $message == "" || $id == "") {
            alertify.alert("Alert", "All fields are required!");
        } else {
            //Post
            $.post("../php/post.php",
                    {
                        a17: 1,
                        title: $title,
                        message: $message,
                        userid: $id
                    },
                    function (data, status) {
                        var $data = data.replace(/ /g, "");
                        if ($data == "success") {
                            alertify.alert("Alert", "Sent successfully.");
                            showNotification();
                        } else {
                            alertify.alert("Alert", "An error occure please retry!");
                        }
                    });
        }

    }
</script>