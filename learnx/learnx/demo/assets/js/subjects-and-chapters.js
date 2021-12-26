$(function () {

    switch (localStorage.getItem("mainSubject")) {
        case "PhysicalSciences":
            MainPhysicsGrade10Demo();
            break;
        case "Mathematics":
            MainMathsGrade10Demo();
            break;
        default:
            MainMathsGrade10Demo();
    }
    /** Onclick **/
    $("#mainSubjectMathsGrade10").click(function () {
        MainMathsGrade10Demo();
    });
    $("#mainSubjectPhysicsGrade10").click(function () {
        MainPhysicsGrade10Demo();
    });
    /**
     * 
     * Transeverse Pulse Formula Sections
     * 
     * **/
    $("#demoGrade10TransversePulseFormulaSectionOneFindSpeed").click(function () {
        var $initialCalledId = sessionStorage.getItem("currentCalledID");
        if($initialCalledId != null || $initialCalledId != undefined){
            $("#"+$initialCalledId).hide();
        }
        sessionStorage.setItem("currentCalledID", "demoGrade10TransversePulseLayoutSectionOneFindSpeed");
        $("#demoGrade10TransversePulseLayoutSectionOneFindSpeed").show();
        //GetModal
        var $modal = $('[data-remodal-id=demoGrade10TransversPulse]').remodal();
        // Opens the modal window
        $modal.close();
        //Set seesion storage to calculate .this
        sessionStorage.setItem("FormulaSection", "demoGrade10TransversePulseLayoutSectionOneFindSpeed");
    });
    $("#demoGrade10TransversePulseFormulaSectionOneFindDistance").click(function () {
        var $initialCalledId = sessionStorage.getItem("currentCalledID");
        if($initialCalledId != null || $initialCalledId != undefined){
            $("#"+$initialCalledId).hide();
        }
        sessionStorage.setItem("currentCalledID", "demoGrade10TransversePulseLayoutSectionOneFindDistance");
        $("#demoGrade10TransversePulseLayoutSectionOneFindDistance").show();
        //GetModal
        var $modal = $('[data-remodal-id=demoGrade10TransversPulse]').remodal();
        // Opens the modal window
        $modal.close();
        //Set seesion storage to calculate .this
        sessionStorage.setItem("FormulaSection", "demoGrade10TransversePulseFormulaSectionOneFindDistance");
    });
    /**
     * 
     * End Transeverse Pulse Formula Sections
     * 
     * **/
    /** End Onclick **/
    /** Functions **/
    function MainMathsGrade10Demo() {
        //Set storage
        localStorage.setItem("mainSubject", "Mathematics");
        localStorage.setItem("keyboardID", "textbox");
        //Show Chapter, Subject and list
        $("#subjects-and-chapters-title-demo").text("Mathematics");
        $("#subjects-and-chapters-subtitle-demo").text("Algebra");
        $("#mainChaptersList").html('<a href="#" class="list-group-item list-group-item-action active">Algebra</a>');
        //Show section
        var $initialCalledId = sessionStorage.getItem("currentCalledID");
        if($initialCalledId != null || $initialCalledId != undefined){
            $("#"+$initialCalledId).hide();
        }
        sessionStorage.setItem("currentCalledID", "algebraGeneralEquations");
        $("#algebraGeneralEquations").show();

    }
    function MainPhysicsGrade10Demo() {
        //Set storage
        localStorage.setItem("mainSubject", "PhysicalSciences");
        //Show Chapter, Subject and list
        $("#subjects-and-chapters-title-demo").text("Physical Sciences");
        $("#subjects-and-chapters-subtitle-demo").text("Transvers Pulse");
        $("#mainChaptersList").html('<a href="#" data-remodal-target="demoGrade10TransversPulse" class="list-group-item list-group-item-action active">Transvers Pulse</a>');
        //GetModal
        var $modal = $('[data-remodal-id=demoGrade10TransversPulse]').remodal();
        // Opens the modal window
        $modal.open();
        
        var $initialCalledId = sessionStorage.getItem("currentCalledID");
        if($initialCalledId != null || $initialCalledId != undefined){
            $("#"+$initialCalledId).hide();
        }
        //sessionStorage.setItem("currentCalledID", "algebraGeneralEquations");

    }
    /** End Functions **/

});

