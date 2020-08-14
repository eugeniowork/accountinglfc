$(document).ready(function(){
    $('.logout').on('click',function(){
        $('.div-loading').show();
        $.ajax({
            url:base_url+'dashboard_controller/logout',
            type:'get',
            success:function(response){
                window.location = base_url;
            },
            error:function(response){
                $('.div-loading').hide();
                toast_options(4000);
                toastr.error("There was a problem logging out your account, please try again!");
            }
        })
    })

    $('.minize-navbar-btn').on('click',function(){
        $('.div-side-navbar').hide('slide');
        $('.div-main-body').css({"transition": "1s","padding-left":"30px"});
        $('.show-navbar-btn').show();
    })
    $('.show-navbar-btn').on('click',function(){
        $('.div-side-navbar').show('slide');
        $('.div-main-body').css({"transition": "1s","padding-left":"270px"});
        $('.show-navbar-btn').hide();
    })
    
})