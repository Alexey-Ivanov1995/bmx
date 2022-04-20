let cardControl =  $('.card-control')

    $('.header__button-menu,.menu__button-close').click(function (){
    $('body').toggleClass('memu--active')
    $('main').toggleClass('main-hidden')
})
    $('.header__button-search , .search-window__close').click(function (){
    $('main').toggleClass('main-hidden')
    $('.search-window ').toggleClass('search-window--active')
    $('.search-window__input').focus()
})
$('.sorting-btn').click(function (){
    $('.sorting-btn').toggleClass('is-active')
    if($('.is-active').hasClass('btn-list')){
        cardControl.find('li').removeClass('col-md-6')
        cardControl.find('.card').addClass('card-flex d-md-flex d-block')

        let body = $('.card-flex')
        body.each(function (){
          let cardBody = $(this).find('.card-body').clone()
            cardBody.find('.card-header').addClass('col-4')
            cardBody.remove()
            $(this).prepend(cardBody)
            cardBody.addClass('col-4 d-md-flex d-none')
            $(this).find('.card__list').addClass('col-md-8 col-12')
            $(this).find('.card__description-control').removeClass('col-4')
            $(this).find('.card__list > .card-body').addClass('d-md-none d-block')
            // $(this).find('.card__section-description').removeClass('justify-content-center')
            $(this).find('.card__section-description').addClass('justify-content-md-start')
        })
    } else {
        cardControl.find('li').addClass('col-md-6')
        cardControl.find('.card').removeClass('card-flex d-md-flex d-block')
        $('.card').each(function (){
            $(this).find('.card-body').first('.card-body').remove()
            $(this).find('.card-header').removeClass('col-4')
            $(this).removeClass('col-4')
            $(this).find('.card__description-control').addClass('col-4')
            $(this).find('.card__list').removeClass('col-md-8 col-12')
            $(this).find('.card__list > .card-body').removeClass('d-md-none d-block')
            $(this).find('.card__section-description').removeClass('justify-content-md-start')
        })
    }
})
