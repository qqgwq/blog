$(document).ready(function(){
  $('#signup').validate({
    rules:{
      name: {
        required: true
      },
      email: {
        required: true
      },
      password: {
        required: true,
        minlength: 5
      },
      password_confirmation: {
        minlength : 5,
        equalTo : "#password"
      },
      messages: {
        name: {
          required: "Please enter your name"
        },
        email: {
          required: "Please enter your email"
        },
        password: {
          required: "Please enter your password",
          minlength: "The password cannot be less than 5 letters long"
        },
        password_confirmation: {
          required: "Please enter your password",
          equalTo: "Inconsistent password input twice"
        }
      }
    }
  })
})