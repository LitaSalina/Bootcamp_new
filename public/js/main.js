

// GUEST BOOK

$('#msg-send-btn').click(function(){
    var username = '<p class="chat-done-new-username">' + $('#username-input').val() + '</p>';
    var message = '<p class="chat-done-new-msg">' + $('#message-input').val() + '</p>';
    var postingDate = '<p class="chat-done-new-time">' + new Date().getDate() + '.' + new Date().getMonth() + '.' + new Date().getFullYear() + '.' + '</p>';
    $('#chat-done').append('<div class="chat-done-new">' + username + postingDate + message + '</div>');
    $('#username-input').val('');
    $('#message-input').val('');
})

// REGISTRATION FORM
// --> e-mail validation

$('#email-input').focusout(function() 
{
	var input=$(this);
	var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var is_email=regex.test(input.val());
    var hasMsg = $('.msg')

    if (hasMsg.length == 0) {
        if (is_email) {
            $('#reg-email').append('<div class="col-6 reg-valid msg"><p>..great</p></div>')
        } else {
            $('#reg-email').append('<div class="col-6 reg-invalid msg"><p>..e-mail is not valid</p></div>')
        }
    } else {
        if (is_email) {
            $('#reg-email').remove('.msg').append('<div class="col-6 reg-valid msg"><p>..great</p></div>')
        } else {
            $('#reg-email').remove('.msg').append('<div class="col-6 reg-invalid msg"><p>..e-mail is not valid</p></div>')
        }
    }
});

// --> first-name validation

$('#first-name-input').focusout(function(){
    var firstname1 = $('#first-name-input').val();
    var firstname2 = firstname1.length;
    if (firstname2 < 4) {
        $('#reg-first-name').append('<div class="col-6 reg-invalid msg"><p>..the first name must consist of at least <strong>4</strong> characters</p></div>')
    } else {
        $('#reg-first-name').remove('#reg-invalid').append('<div class="col-6 reg-valid msg"><p>..great</p></div>')
    }
});

// --> last-name validation

$('#last-name-input').focusout(function()
{
    var lastname1 = $('#last-name-input').val();
    var lastname2 = lastname1.length;
    if (lastname2 < 4) {
        $('#reg-last-name').append('<div class="col-6 reg-invalid msg"><p>..the last name must consist of at least <strong>4</strong> characters</p></div>')
    } else {
        $('#reg-last-name').remove('#reg-invalid').append('<div class="col-6 reg-valid msg"><p>..great</p></div>')
    }
});

// --> password length validation

$('#password-input').focusout(function(){
    var password1 = $('#password-input').val();
    var password2 = password1.length;
    if (password2 < 6) {
        $('#reg-password').append('<div class="col-6 reg-invalid msg"><p>..the password must consist of at least <strong>6</strong> characters</p></div>')
   } else {
    $('#reg-password').remove('#reg-invalid').append('<div class="col-6 reg-valid msg"><p>..great</p></div>')
   }
 });

 // --> retyped password validation

 $('#password2-input').focusout( function(){
     var firstPass = $('#password-input').val();
     var secondPass = $('#password2-input').val();
     if (firstPass == secondPass) {
         $('#reg-password2').append('<div class="col-6 reg-valid msg"><p>..great</p></div>')
     } else {
        $('#reg-password2').append('<div class="col-6 reg-invalid msg"><p>..passwords do not match</p></div>')

     }
 })