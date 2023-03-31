$(document).ready(() => {
  // Services
  $('.tab_content').hide();
  $('.tab_content:first').show();
  $('.tabs li:first').addClass('active');

  $('.tabs li').click((event) => {
    const $selectedService = $(event.currentTarget);
    $('.tabs li').removeClass('active');
    $selectedService.addClass('active');
    $('.tab_content').hide();

    const selectTab = $selectedService.find('a').attr('href');

    $(selectTab).fadeIn();
    $('body,html').animate({ scrollTop: 0 }, 400);
  });

  // Years
  $('.filter-date .button').click((event) => {
    const selectedYear = $(event.currentTarget);
    const value = selectedYear.attr('data-filter');
    const elem = $('.elem');

    $('.filter-date .button').removeClass('active');
    selectedYear.addClass('active');

    if (value === 'all') {
      // elem.show("200");
      elem.removeClass('hide-me');
      elem.addClass('show-me');
    } else {
      // elem.not("."+value).hide("200");
      elem.not(`.${value}`).addClass('hide-me');
      elem.not(`.${value}`).removeClass('show-me');
      // elem.filter("."+value).show("200");
      elem.filter(`.${value}`).addClass('show-me');
      elem.filter(`.${value}`).removeClass('hide-me');
    }
  });
});
