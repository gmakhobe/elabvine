<?php
include("../php/session.php");
include("includes/configs.php");

if (isset($_REQUEST['chatsId'])) {
    //Clean request
    $chatsId = mysqli_real_escape_string($DATABASE_CONNECTION, $_REQUEST['chatsId']);
    //Get names from database
    $sql = mysqli_query($DATABASE_CONNECTION, "SELECT * FROM `" . $companyuri . "_members_information` WHERE Id = '$chatsId';");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        $chat_name = $row["Name"] . " " . $row["Surname"];
    } else {
        header("Location: messages.php");
    }
} else {
    header("Location: messages.php");
}
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Site Title -->
        <title>Chats</title>
        <!-- Meta Description -->
        <meta name="description" content="<?php echo $companyuri; ?> Chats">      
        <!-- Header -->
        <!-- meta character set -->
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="../bootstrap old/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <style>
            .chat
            {
                list-style: none;
                margin: 0;
                padding: 0;
            }

            .chat li
            {
                margin-bottom: 10px;
                padding-bottom: 5px;
                border-bottom: 1px dotted #B3A9A9;
            }

            .chat li.left .chat-body
            {
                margin-left: 60px;
            }

            .chat li.right .chat-body
            {
                margin-right: 60px;
            }


            .chat li .chat-body p
            {
                margin: 0;
                color: #777777;
            }

            .panel .slidedown .glyphicon, .chat .glyphicon
            {
                margin-right: 5px;
            }

            .panel-body
            {
                overflow-y: scroll;
                height: 100vh;
            }

            ::-webkit-scrollbar-track
            {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                background-color: #F5F5F5;
            }

            ::-webkit-scrollbar
            {
                width: 12px;
                background-color: #F5F5F5;
            }

            ::-webkit-scrollbar-thumb
            {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
                background-color: #555;
            }


        </style>

        <script src="../js/vendor/jquery-2.2.4.min.js"></script>
        <script src="../bootstrap old/js/bootstrap.min.js"></script>
        <script src="../bootstrap old/js/w3.js"></script>
        <script src="../js/alertify.min.js"></script>
        <script type="text/javascript">
            //override defaults
            alertify.defaults.transition = "slide";
            alertify.defaults.theme.ok = "btn btn-primary";
            alertify.defaults.theme.cancel = "btn btn-danger";
            alertify.defaults.theme.input = "form-control";
        </script>
        <link rel="stylesheet" href="../css/alertify.css">

    </head>

    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading navbar-fixed-top">
                            <span class="fa fa-comments"></span> Chat with <?php echo $chat_name; ?>
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <span class="fa fa-chevron-down"></span>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li><a href="javascript:location.reload();"><span class="fa fa-refresh">
                                            </span> Refresh</a></li>
                                    <li>
                                        <?php
                                        if ($account_type == "Student") {
                                            echo '<a href="lesson.php"><span class="fa fa-universal-access"> </span> Lesson</a>';
                                        } else {
                                            echo '<a href="lessons.php"><span class="fa fa-universal-access"> </span> Lessons</a>';
                                        }
                                        ?>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="messages.php"><span class="fa fa-chevron-left"></span> Back</a></li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="panel-body">
                            <ul class="chat" id="chats">
                                <li class="left clearfix"><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                                <span class="fa fa-clock-o"></span>12 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix"><span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted"><span class="fa fa-clock-o"></span>13 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix"><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                                <span class="fa fa-clock-o"></span>14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix"><span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted"><span class="fa fa-clock-o"></span>15 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix"><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                                <span class="fa fa-clock-o"></span>14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix"><span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted"><span class="fa fa-clock-o"></span>15 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix"><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                                <span class="fa fa-clock-o"></span>14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix"><span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted"><span class="fa fa-clock-o"></span>15 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix"><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                                <span class="fa fa-clock-o"></span>14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix"><span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted"><span class="fa fa-clock-o"></span>15 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix"><span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                                <span class="fa fa-clock-o"></span>14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix"><span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted"><span class="fa fa-clock-o"></span>15 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                            dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="panel-footer navbar-fixed-bottom">
                            <div class="input-group">
                                <textarea id="messagebox" class="form-control input-sm" placeholder="Type a message" rows="1" cols="20"></textarea>

                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="sendMessage">
                                        Send</button>
                                </span>

                            </div>
                            <div class="btn-group pull-right">
                                <a class="btn" href="#" data-toggle="modal" data-target="#dashboard-document-upload"><span class="fa fa-paperclip" style="font-size:18px;"></span></a> <a class="btn" href="#" data-toggle="modal" data-target="#dashboard-document-tools"><i style="font-size:18px;" class="fa fa-cog"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="text" id="receiverMessage" value="<?php echo $chatsId; ?>"/>
        <script>
            $(function () {
                $(".panel-body").prop({scrollTop: $(".panel-body").prop("scrollHeight")});
                //Load Chatss
                function loadChat() {

                    var $recieverId = $("#receiverMessage").val();

                    $.post("../php/messages.php",
                            {
                                reqId: "loadChat",
                                receiver: $recieverId
                            },
                            function (data, status) {
                                $("#chats").html(data);
                            });

                }
                loadChat();
                //Send Message
                $("#sendMessage").click(function () {
                    sendMessage()
                });
                //send Message function
                function sendMessage() {

                    var $message = $("#messagebox").val();
                    var $recieverId = $("#receiverMessage").val();
                    //Append Messages
                    $("#chats").append('<li class="right clearfix"><span class="chat-img pull-right">'+
                                        '<img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />'+
                                    '</span>'+
                                   '<div class="chat-body clearfix">'+
                                        '<div class="header">'+
                                            '<small class=" text-muted"><span class="fa fa-clock-o"></span>Sending...</small>'+
                                            '<strong class="pull-right primary-font">loading...</strong>'+
                                        '</div>'+
                                        '<p>'+
                                            $message+
                                        '</p>'+
                                    '</div>'+
                                '</li>');
                        
                        $.post("../php/messages.php",
                            {
                                reqId: "sendmessage",
                                receiver: $recieverId,
                                message: $message
                            },
                            function (data, status) {
                                $("#messagebox").val("");
                                loadChat();
                            });
                   
                }
            });
        </script>

    </body>

</html>