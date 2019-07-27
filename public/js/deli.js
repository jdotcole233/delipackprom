$(document).ready(function(){
    $('#appleclick').click(function (e) {
        console.log("Working");
        $('#exampleModalLongTitle').text("Coming soon").css({
            'color': 'red',
            'font-size': '34px'
        });
    })

    $('#downloadbtn').click(function (e) {
        $('#exampleModalLongTitle').text("");

    });



    if (location.pathname != '/'){
        $('#contactnav').attr('href', '/');
        console.log($('#contactnav').attr('href'));
    }

    $('#Carousel').carousel({
        interval: 3000
    })

  


    // setInterval(companyNames, 5000);
    companyNames();
    function companyNames(){
        let logoDisplays = "";
        $('.partnerslogsdisplay').html("");

        $.ajax({
            method: 'GET',
            url: 'http://delipackport.com/api/getcompanylist',
            success: function(data){
                $.each(data, function(i, v){
                    if (v.company_logo_path != 'delipack1.png'){
                        let logoDisplay = `<div> <img src="http://superuser.delipackport.com/company_logos/${v.company_logo_path}" /></div>`;
                        logoDisplays = `<div class="slide"> <img width="45px" src="http://superuser.delipackport.com/company_logos/${v.company_logo_path}" /></div>`;
                        $('.partnerslogsdisplay').append(logoDisplay);
                        // $('.slick-track').append(logoDisplays);
                        $('.customer-logos').slick('slickAdd', logoDisplays)

                    }
                });
            },
            error: function(error){
                console.log(error);
            }
        });

        $('.customer-logos').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    }




 




    $('.sendClientRequestBtn').click(function(e){
        e.preventDefault();
        let company_name = $('#company_name');
        let phone_number = $('#phone_number');
        let location = $('#location');
        let email = $('#email');
        let borderdangercss = {
            'border' : '1px solid red'
        }
        let bordersuccesscss = {
            'border': '0px solid red'
        }

        if(company_name.val() == "" || phone_number.val() == "" || location.val() == "" || email.val() == ""){
            company_name.css('border','1px solid red');
            phone_number.css('border','1px solid red');
            location.css('border','1px solid red');
            email.css('border','1px solid red');
            return;
        } 
        company_name.css('border','');
        phone_number.css('border','');
        location.css('border','');
        email.css('border','');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#requestMessage').css('display', 'none');
        $('#requestMessageSpinner').css('display', 'block');

        company_name.prop('readonly', true);
        phone_number.prop('readonly', true);
        location.prop('readonly', true);
        email.prop('readonly', true);
        $('#message').prop('readonly', true);
        $(this).prop('disable', true);

        $.ajax({
            method: "POST",
            url: '/sendClientRequest',
            data: $('#sendClientRequestForm').serialize(),
            success: function(data){
                console.log(JSON.stringify(data) + "Back ");
                $('#requestMessage').css('display', 'block');
                $('#requestMessageSpinner').css('display', 'none');
                company_name.prop('readonly', false);
                phone_number.prop('readonly', false);
                location.prop('readonly', false);
                email.prop('readonly', false);
                $('#message').prop('readonly', false);
                $(this).prop('disable', false);
                $('#requestModal').modal('hide');
                $('#sendClientRequestForm').trigger('reset');
                
                Swal.fire(
                    'Email Sent!',
                    'We will get back to you as soon as possible',
                    'success'
                )
            },
            error: function(error){
                $('#requestMessage').css('display', 'block');
                $('#requestMessageSpinner').css('display', 'none');
                company_name.prop('readonly', false);
                phone_number.prop('readonly', false);
                location.prop('readonly', false);
                email.prop('readonly', false);
                $('#message').prop('readonly', false);
                $(this).prop('disable', false);
                Swal.fire(
                    'Email Sent!',
                    'We will get back to you as soon as possible',
                    'danger'
                )
            }
        });
    });
});