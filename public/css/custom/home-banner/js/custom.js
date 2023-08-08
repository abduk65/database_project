$(document).ready(function() {
    "use strict";
    //PORTFOLIO FILTER
    var filterList = {
        init: function() {
            $('#portfoliolist').mixItUp({
                selectors: {
                    target: '.portfolio',
                    filter: '.filter'
                },
                load: {
                    filter: '.app, .card, .icon, .logo, .web'
                }
            });
        }
    };
    filterList.init();
    //home page popup contact form
    $('#contact_form').on('submit', function(e) {
        var postdata = $(this).serializeArray();
        var formurl = $(this).attr("action");
        $.ajax({
            url: formurl,
            type: "POST",
            data: postdata,
            success: function(data) {
                $(".succ_mess").css("display", "block");
                $("#contact_form").closest('form').find("input[type=text],input[type=tel],input[type=email], textarea").val("");
            }
        });
        e.preventDefault(); //STOP default action
        e.unbind(); //unbind. to stop multiple form submit.
    });
    //Subscribe Form
    $('#home_form').on('submit', function(e) {
        var postdata = $(this).serializeArray();
        var formurl = $(this).attr("action");
        $.ajax({
            url: formurl,
            type: "POST",
            data: postdata,
            success: function(data) {
                $(".succ_mess1").css("display", "block");
                $("#home_form").closest('form').find("input[type=text],input[type=tel],input[type=email], textarea").val("");
            }
        });
        e.preventDefault(); //STOP default action
        e.unbind(); //unbind. to stop multiple form submit.
    });
    //GOOGLE MAP - SCROLL REMOVE
    $('.contact-map')
        .on('click', function() {
            $(this).find('iframe').addClass('clicked')
        })
        .on('mouseleave', function() {
            $(this).find('iframe').removeClass('clicked')
        });
});