$('.form').submit(function(e){
    e.preventDefault();
    var url = this.getAttribute('action');
    var email = $('#EmailLogin').val();
    var password = $('#Password').val();

    if (email !="" && password!= ""){
        $.ajax({
            url:url+"ajax/login.php",
            type:'POST',
            dataType:'json',
            data: {email:email, password:password},
            success: function(data){
                if(data == 1){
                    window.location.href = url+"index.html";
                } else {
                    alert("Usuario o contraseña invalidos");
                }
            }
        });
    }

});
