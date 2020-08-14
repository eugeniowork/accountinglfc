$(document).ready(function(){
    var loadingLogin = false;
    $('.sign-in').on('click',function(){
        var btnName = this;
        if(!loadingLogin){
            $(btnName).attr('disabled',true);
            $(btnName).css('cursor','not-allowed');
            $(btnName).text('');
            $(btnName).append('<span><span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span></span> Validating . . .');
            loadingLogin = true;
            $.ajax({
                url:base_url+"login_controller/login_validate",
                type:'POST',
                dataType:'json',
                data:{
                    email:$('.email').val(),
                    password:$('.password').val(),
                },
                success:function(response){
                    $('.errors').empty();
                    if(response.status == "success"){
                        window.location=base_url + 'dashboard';
                    }
                    else{
                        $('.errors').append('<div class="alert alert-danger alert-dismissible fade show">'+
                            response.msg+
                            '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
                            '</div>'
                        )
                        enable_sign_in_button(btnName)
                    }
                },
                error:function(response){
                    toast_options(4000);
                    toastr.error("There was a problem, please try again!");
                    enable_sign_in_button(btnName)
                }
            })
        }
    })

    function enable_sign_in_button(btnName){
        $(btnName).attr('disabled',false);
        $(btnName).css('cursor','pointer');
        $(btnName).text('Sign in');
        loadingLogin = false;
    }
})