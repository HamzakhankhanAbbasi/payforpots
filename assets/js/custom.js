// HOME SCREEN MENU OPEN JS START
$('.toggle-btn').click(function(){
  $('aside').addClass('show');
});
// HOME SCREEN MENU OPEN JS END

// HOME SCREEN MENU CLOSE JS START
$('.toggleClose-btn').click(function(){
  $('aside').removeClass('show');
});
// HOME SCREEN MENU CLOSE JS END

// INPUT FIELD FOCUS JS START
$('.fieldBox').click(function(e) {
  e.preventDefault();
  $('.fieldBox').removeClass('active');
  $(this).addClass('active');
});
// INPUT FIELD FOCUS JS END

// SHOW/HIDE PASSWORD JS START
$(".showPass").click(function() {
  if ($(this).hasClass("fa-eye")) {
    $(this).toggleClass("fa-eye-slash");
    var input = $($(this).attr());
    alert($(input).attr());
  }
  else {
    $(this).toggleClass("fa-eye");
  }
});

function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  }
  else {
    x.type = "password";
  }
}
// SHOW/HIDE PASSWORD JS END

// HOME SCREEN LINKS JS START
$('.screenLinks ul li a').click(function(){
  $('.screenLinks ul li a').removeClass('activeLink');
  $(this).addClass('activeLink');
});
// HOME SCREEN LINKS JS END

// MEASURE SCREEN IMAGE UPLOADER JS START
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#imagePreview').css('background-image', 'url('+e.target.result +')');
      $('#imagePreview').hide();
      $('#imagePreview').fadeIn(650);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload").change(function() {
  readURL(this);
});
// MEASURE SCREEN IMAGE UPLOADER JS END

// MEASURE INFO BOX JS START
$(".info-btn ").click(function(){
  $(".infoBox").toggleClass("show");
});
// MEASURE INFO BOX JS END

//profile-page-avatar-start
function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
          $('#imagePreviewcart').css('background-image', 'url('+e.target.result +')');
          $('#imagePreviewcart').hide();
          $('#imagePreviewcart').fadeIn(650);
      }
      reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUploads").change(function() {
  readURL(this);
});
//profile-page-avatar-end

//profile-page-avatar-start
function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
          $('#imagePreviews').css('background-image', 'url('+e.target.result +')');
          $('#imagePreviews').hide();
          $('#imagePreviews').fadeIn(650);
      }
      reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload").change(function() {
  readURL(this);
});
//profile-page-avatar-end

//PRODUCT QUANTITY SELECT INPUT
$(document).ready(function(){
    $('.count').prop('disabled', false);
    $(document).on('click','.plus',function(){
       $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) + 1 );
   });
    $(document).on('click','.minus',function(){
      $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) - 1 );
      if ($(this).siblings('.count').val() == 0) {
        $(this).siblings('.count').val(1);
        }
    });
});