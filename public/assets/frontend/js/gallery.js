$(document).keydown(function (event) {
    if (event.which === 27) {
        
        window.location.href = readCookie('latest_category_url');
    } else if (event.which === 39) {
        
        window.location.href = $('.url-next')[0].href;
    } else if (event.which === 37) {
        
        window.location.href = $('.url-prev')[0].href;
    }
});
function showTags(images, key) {/*
 var images = [
 {title:'This is a tree',position_x:0.19,position_y:0.4},
 {title:'Pretty sure this is also a tree',position_x:0.5,position_y:0.3},
 {title:'Can you guess this one?',position_x:0.775,position_y:0.5},
 ];*/
    var image = $('.gallery-basic[data-key="' + key + '"]')[0];// document.getElementById('gallery-basic');// document.getElementById('gallery-basic');
    var options = {};
    var data = [];
    for (i = 0; i < images.length; i++) {
        data.push(
                Taggd.Tag.createFromObject({
                    position: {
                        x: images[i].position_x,
                        y: images[i].position_y
                    },
                    text: images[i].title,
                })
                );
    }
    var taggd = new Taggd(image, options, data);
    $('.taggd .taggd__wrapper').each(function (index, e) {
        $(this).attr('title', images[index].title);
        $(this).attr('data-key', images[index].id);
        $(this).appendTo('.gallery-basic[data-key="' + images[index].id + '"]');
    });
}
function getTags(key) {
    $.ajax({
        url: '/api/get-gallery-tags',
        method: 'POST',
        data: {gallery_id: key},
        dataType: 'JSON',
        success: function (resp) {
            if (resp.success) {
                showTags(resp.records, key);
                $('#tag_count').text(resp.records.length);
                if ($('.taggd__wrapper').length) {
                    getProducts($('.taggd__wrapper:first').attr('title'));
                }else{
                    $('.thumb-galery').addClass('full-width-galery'); 
                    $('.taggd__image').addClass('full-width-100');
                }
            }
        }
    });
}
function getProducts(keyword) {
    $.ajax({
        url: '/api/get-products-by-tag',
        method: 'POST',
        data: {tag_title: keyword},
        dataType: 'JSON',
        success: function (resp) {
            if (resp.success) {
                var result = '<div class="list-products-getbytag owl-carousel owl-theme">';
                resp.records.forEach(function (entry) {
                    result += '<a href="' + entry.url + '" class="item"><img src="' + entry.image + '"/><p class="product-title">' + entry.title + '</p></a>';
                });
                result += '</div>';
                $('.thumb-img').css('max-height', 'calc(100vh - 240px)');
                $('.taggd__image').css('height', $('.thumb-img').innerHeight() + 'px');
                $('.thumb-img .list-products-getbytag').remove();
                $('.thumb-img').append(result);
                $('.list-products-getbytag').owlCarousel({
                    items: 8,
                    loop: true,
                    dots: false,
                    margin: 10
                });
            }
        }
    });
}
jQuery(function () {
    $('body').delegate('.taggd__wrapper', 'click', function () {
        getProducts(this.title);
    });
    $('.gallery-basic').each(function () {
        getTags(this.dataset.key);
    });
    /* 	Thumb Slider
     /*-----------------------------------------------------------------------------------*/
    /*$('.thumb-slider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });*/
});
 $('.login').magnificPopup({
        type: 'inline',
        midClick: true,
        mainClass: 'mfp-fade'
        
    });
    $('.register').magnificPopup({
        type: 'inline',
        midClick: true,
        mainClass: 'mfp-fade'
    });
    $('#password1').change(function () {
    if ($(this).val().length < 6) {
        var span = "Nh???p m???t kh???u t???i thi???u 6 k?? t???";
        $(this).parent().find('.help-block').html(span);
    } else {
        $('.help-block').html('');
    }
});
$('#password2').change(function (e) {
    if ($(this).val() != $('#password1').val()) {
        var span = "Nh???p l???i m???t kh???u kh??ng tr??ng kh???p";
        $(this).parent().find('.help-block').html(span);
    } else {
        $('.help-block').html('');
    }
});

$('#username1').change(function () {
    var username = $(this).val();
    var $this = $(this);
    var type = $('input[name="type"]:checked').val();
    if (type == 1) {
        $.ajax({
            url: '/api/check-user-marketing',
            method: 'POST',
            data: {username: username, _token: $('#token').val()},
            dataType: 'JSON',
            success: function (resp) {
                if (resp.success == false) {
                    var span = "Username ???? t???n t???i";
                    $this.parent().find('.help-block').html(span);
                } else {
                    $('.help-block').html('');
                }
            }
        });
    } else {
        $.ajax({
            url: '/api/check-user-construction',
            method: 'POST',
            data: {username: username, "_token": $('#token').val()},
            dataType: 'JSON',
            success: function (resp) {
                if (resp.success == false) {
                    var span = "Username ???? t???n t???i";
                    $this.parent().append(span);
                } else {
                    $('.help-block').remove();
                }
            }
        });
    }
})
$('#frmRegister').submit(function (e) {
    e.preventDefault();
    var type = $('input[name="type"]:checked').val();
    $('.load').css('display', 'block');
    $('.register-btn').attr("disabled", "disabled");
    if (type == 1) {
        $.ajax({
            url: '/api/register-marketing',
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (resp) {
                $('.load').css('display', 'none');
                $('.register-btn').removeAttr("disabled", "");
                $('.login').magnificPopup('close');
                swal({
                    title: "????ng k?? t??i kho???n th??nh c??ng. B???n vui l??ng v??o gmail ????? x??c th???c t??i kho???n",
                    type: "success"
                });
                $('#frmRegister')[0].reset();
            }
        });
    } else if(type == 2) {
        $.ajax({
            url: '/api/register-construction',
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (resp) {
                $('.load').css('display', 'none');
                $('.register-btn').removeAttr("disabled", "");
                $('.login').magnificPopup('close');
                swal({
                    title: "????ng k?? t??i kho???n th??nh c??ng. B???n vui l??ng v??o gmail ????? x??c th???c t??i kho???n",
                    icon: "success"
                });
                $('#frmRegister')[0].reset();
            }
        });
    }else if(type == 3){
        $.ajax({
            url: '/api/register-member',
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (resp) {
                $('.load').css('display', 'none');
                $('.register-btn').removeAttr("disabled", "");
                $('.login').magnificPopup('close');
                swal({
                    title: "????ng k?? t??i kho???n th??nh c??ng. B???n vui l??ng v??o gmail ????? x??c th???c t??i kho???n",
                    icon: "success"
                });
                $('#frmRegister')[0].reset();
            }
        });
    }
});
$('#frmLogin').submit(function (e) {
    e.preventDefault();
    var type = $('input[name="type_login"]:checked').val();
    if ($('#username').val() == '') {
        var span = "Username kh??ng ???????c ????? tr???ng";
        $('#username').parent().find('.help-block').html(span);
        return;
    }
    if ($('#password').val().length < 6) {
        var span = "Nh???p m???t kh???u t???i thi???u 6 k?? t???";
        $('#password').parent().find('.help-block').html(span);
        return;
    }
    if (type == 1) {
        $.ajax({
            url: '/api/login-marketing',
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (resp) {
                $('.login').magnificPopup('close');
                if (resp.success == true) {
                    swal({
                        title: "????ng nh???p th??nh c??ng",
                        type: 'success'
                    }, function () {
                        window.location.reload();
                    });
                } else {
                    swal({
                        title: "????ng nh???p kh??ng th??nh c??ng",
                        type: 'error'
                    });
                }
            }
        });
    } else if(type == 2) {
        $.ajax({
            url: '/api/login-construction',
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (resp) {
                $('.login').magnificPopup('close');
                if (resp.success == true) {
                    swal({
                        title: "????ng nh???p th??nh c??ng",
                        type: "success"
                    }, function () {
                        window.location.reload();
                    });
                } else {
                    swal({
                        title: "????ng nh???p kh??ng th??nh c??ng",
                        type: "error"
                    });

                }
            }
        });
    }else if(type ==3){
        $.ajax({
            url: '/api/login-member',
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (resp) {
                $('.login').magnificPopup('close');
                if (resp.success == true) {
                    swal({
                        title: "????ng nh???p th??nh c??ng",
                        type: "success"
                    }, function () {
                        window.location.reload();
                    });
                } else {
                    swal({
                        title: "????ng nh???p kh??ng th??nh c??ng",
                        type: "error"
                    });

                }
            }
        });
    }
});
//

