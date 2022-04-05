$('.select_img_').click(function () {

  $('.choose_img').trigger('click');

})


function readImgURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.user-form-img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(".choose_img").change(function(){
    readImgURL(this);
});
