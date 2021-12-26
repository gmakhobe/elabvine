<style>
    .animated {
        -webkit-transition: height 0.2s;
        -moz-transition: height 0.2s;
        transition: height 0.2s;
    }

    .stars
    {
        margin: 20px 0;
        font-size: 24px;
        color: #d17581;
    }
</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="col-md-12">
    <form accept-charset="UTF-8" action="" method="post">
        <input id="ratings-hidden" name="rating" type="hidden"> 
        <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>

        <div class="text-right">
            <div class="stars starrr" data-rating="0"></div>
            <a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                <span class="glyphicon glyphicon-remove"></span>Cancel</a>
            <button class="btn btn-success btn-lg" type="submit">Save</button>
        </div>
    </form>
</div>
<script>
    $(function(){
    

            $(function(){

            $('#new-review').autosize({append: "\n"});
            var reviewBox = $('#post-review-box');
            var newReview = $('#new-review');
            var openReviewBtn = $('#open-review-box');
            var closeReviewBtn = $('#close-review-box');
            var ratingsField = $('#ratings-hidden');
            openReviewBtn.click(function(e)
            {
            reviewBox.slideDown(400, function()
            {
            $('#new-review').trigger('autosize.resize');
            newReview.focus();
            });
            openReviewBtn.fadeOut(100);
            closeReviewBtn.show();
            });
            closeReviewBtn.click(function(e)
            {
            e.preventDefault();
            reviewBox.slideUp(300, function()
            {
            newReview.focus();
            openReviewBtn.fadeIn(200);
            });
            closeReviewBtn.hide();
            });
            $('.starrr').on('starrr:change', function(e, value){
            ratingsField.val(value);
            });
            
            $('.starrr').click(function(){
                alertify.alert("Alert", ratingsField.val());
            });
            
            });
            
            
    });
</script>