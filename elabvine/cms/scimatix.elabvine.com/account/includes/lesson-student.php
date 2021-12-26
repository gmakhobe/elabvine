<!--Nav Tabs-->
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#menu1">Booked Lesson</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu2">Past Lessons</a>
    </li>
    
</ul>
<!--End Nav Tabs-->
<!-- Tabs -->
<div class="tab-content">
    <div class="tab-pane container active" id="menu1">
        <div id="menu-1"></div>
    </div>
    <div class="tab-pane container fade" id="menu2">
        <div id="menu-2"></div>
    </div>
    
</div>
<!-- End Tabs -->
<script>
    $(function () {
        function bookedLessons() {
            $.post("../php/index.php",
                    {
                        reqId: "bookedLesson"
                    },
                    function (data, status) {
                        $("#menu-1").html(data);
                    }
            );
        }
        bookedLessons();
        function pastLessons() {
            $.post("../php/index.php",
                    {
                        reqId: "pastLessons"
                    },
                    function (data, status) {
                        $("#menu-2").html(data);
                    }
            );
        }
        pastLessons();
    });
</script>