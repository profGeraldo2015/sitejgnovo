/**
 * Menu.js
 * @version 0.1.0
 * @see https://github.com/brunocarvalhodearaujo/full-menu
 * @author Bruno Carvalho de Araujo <carvalho@hostnet.com.br>
 * @licence MIT
 * @generatedAt Thu Oct 22 2015 11:36:11 GMT-0200 (BRST)
 */
'use strict';

$(document).ready(function () {

  $('#menuTab1').hide();


  function enableMenu() {

    if (typeof (vEnableMenu) !== 'undefined' && vEnableMenu === false) {
      return false;
    }

    var menu = $('#siteMenu');

    var screen = $(document);

    var slogan = $('#meuSlogan');

    slogan.addClass('mini');

    menu.append($('<div>', {
      class: 'uiMenu backgroundTemplate1 isHide'
    })).append(menu.not('.uiMenu').children());

    var container = $('.uiMenu');

    container.prepend($('<div>', {
      class: 'content'
    }).append($('.menuTab')));

    var content = $('.content');

    content.append(container.not('.content').children());

    content.children().addClass('colorTemplate1');

    $(".menuTabLink").addClass('item').removeClass("menuTabLink");

    container.prepend(screen.find('#botoesSociaisWrapper').addClass('social').hide());

    var social = $('.social');

    menu.prepend($('<div class="nav-toggle"><span></span><span></span><span></span></div>'));

    $('.nav-toggle span').addClass('backgroundTemplate2');

    function centerElements() {
      content.removeClass('center');
      if (content.height() > $(window).height()) {
        if (social.length > 0) {
          social.attr('align', 'center').appendTo('.uiMenu');
        }
      } else {
        content.addClass('center');
        if (social.length > 0) {
          social.appendTo('.content');
        }
      }
    }

    $('body').append($('<div>', { id: 'container' }));
    $($('body').children().not('#container')).appendTo('#container');
    $('body').append($('<div>', { id: 'hack', class: 'hide' }).css({
      'height': $('#container').height(),
      'width': '100%',
      'float': 'left',
      'z-index': 10,
      'position': 'absolute',
      'top': 0
    }));

    $('.nav-toggle').on('click touchstart', function (event) {
      if (!container.hasClass('isHide')) {
        container.slideUp("slow");
        $('#siteMenu').appendTo('#siteTopo');
        $('body').scrollTop(0);
      } else {
        $('#siteMenu').appendTo('body');
        container.slideDown("slow");
      }
      $('html').toggleClass('no-scroll');
      $('#hack').toggleClass('hide');
      $('.nav-toggle span').toggleClass('backgroundTemplate3');
      $('.nav-toggle').toggleClass('open fixed');
      $('.uiMenu').toggleClass('isHide');
      $('#container').toggleClass('locked');
      centerElements();
      event.preventDefault();
    });

  }

  function disableMenu() {
    var el = $('.content').children();
    el.children().addClass("menuTabLink");
    $('#meuSlogan').removeClass('mini');
    var social = $('#botoesSociaisWrapper');
    $('#siteMenu').append(el);
    $('#siteMenu').prepend(social);
    $('.uiMenu, .nav-toggle').remove();
  }

  if ($(this).width() <= 1024) {
    enableMenu();
  }

  $(window).resize(function () {
    var width = $(this).width();
    var length = $('.uiMenu').length;
    if (width <= 1024 && length === 0) {
      enableMenu();
    } else if (width > 1024 && length > 0) {
      disableMenu();
    }
  });

});
