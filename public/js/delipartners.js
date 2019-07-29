$(document).ready(function (){


if (location.pathname != '/') {
    $('#contactnav').attr('href', '/');
    console.log($('#contactnav').attr('href'));
}


// companyNames();

// function companyNames() {
//     let logoDisplays = "";
//     $('.partnerslogsdisplay').html("");

//     $.ajax({
//         method: 'GET',
//         url: 'https://delipackport.com/api/getcompanylist',
//         success: function (data) {
//             $.each(data, function (i, v) {
//                 if (v.company_logo_path != 'delipack1.png') {
//                     let logoDisplay = `<div> <img src="https://superuser.delipackport.com/company_logos/${v.company_logo_path}" /></div>`;
//                     logoDisplays = `<div class="slide"> <img width="45px" src="https://superuser.delipackport.com/company_logos/${v.company_logo_path}" /></div>`;
//                     $('.partnerslogsdisplay').append(logoDisplay);
//                     // $('.slick-track').append(logoDisplays);
//                     $('.customer-logos').slick('slickAdd', logoDisplays)

//                 }
//             });
//         },
//         error: function (error) {
//             console.log(error);
//         }
//     });

//     $('.customer-logos').slick({
//         slidesToShow: 5,
//         slidesToScroll: 1,
//         autoplay: true,
//         autoplaySpeed: 1500,
//         arrows: false,
//         dots: false,
//         pauseOnHover: false,
//         responsive: [{
//             breakpoint: 768,
//             settings: {
//                 slidesToShow: 4
//             }
//         }, {
//             breakpoint: 520,
//             settings: {
//                 slidesToShow: 3
//             }
//         }]
//     });
// }

});