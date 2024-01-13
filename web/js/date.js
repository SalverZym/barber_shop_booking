$(document).on('pjax:complete' ,function () {

    let flag1=false,
        flag2=false;

    let monthNames = ["January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"],
        dayNames = ["ВС", "ПН", "ВТ", "СР", "ЧТ", "ПТ", "СБ"],
        now = new Date();

    function makeButton(){
        if(flag2){
            $('app-new-select-time').append("<ui-kit-button _ngcontent-kgn-c199=\"\" class=\"fixed-button ng-star-inserted\" _nghost-kgn-c42=\"\" data-locator=\"continue_btn\">" +
                "<a href="+`http://barbershop/web/time/session?date=${(monthNames.indexOf(curent.innerHTML)<now.getMonth())? now.getFullYear()+1: now.getFullYear()}-${("0"+(monthNames.indexOf(curent.innerHTML)+1)).slice(-2)}-${("0"+flag1).slice(-2)}&time=${flag2}:00`+">"+
                "<button _ngcontent-kgn-c42=\"\" class=\"button type-primary size-medium full-width\" tabindex=\"0\">" +
                "<span _ngcontent-kgn-c42=\"\" class=\"button__row\">" +
                "<div _ngcontent-kgn-c42=\"\" class=\"button__label\" data-locator=\"selected_service_count\">" +
                "</div>" +
                "<div _ngcontent-kgn-c42=\"\" class=\"button__start-icon\"></div>" +
                "<div _ngcontent-kgn-c42=\"\" class=\"button__content\">Продолжить</div></span>" +
                "<span _ngcontent-kgn-c42=\"\" class=\"button__caption\"></span></button>" +
                "</a>"+
                "</ui-kit-button>");
        }
    }

    $('#calendar-days').on('click', 'app-day-box',function (){
        flag1=$(this).find('p.label').html();
        console.log(flag1);
        makeButton();
    });


});



















