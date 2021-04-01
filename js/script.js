'use strict'

if (!('jQuery' in window)) {
  throw new Error('jQuery not found')
}

jQuery.webfacil = {

  isOpen: function () {
    return $(location).attr('href').split('/').lastIndexOf('edit.php') !== -1
  },

  inHome: function () {
    var url = window.location.href.split('/')
    return url.lastIndexOf('index.html') !== -1 || url.lastIndexOf('') !== -1 && url.lastIndexOf('') !== 1
  }

}

$(document).ready(function () {

  $('<input type="hidden" name="origin">').val(window.location.hostname.replace('www.', ''))

  // manipula a galeria
  if ($('.new-gallery').length === 0) {
    $('.facebox').click(function () {
      var img = $(this).children('img')
      $.facebox({ image: img.attr('alt') }, img.attr('title'))
    })
  } else if ($.fn.magnificPopup !== 'undefined') {
    $('.imageGallery > span > img').each(function () {
      if ($(this).attr('src') !== 'imagens/blank.gif') {
        $(this).parent().attr('href', $(this).attr('src'))
      } else {
        $(this).parent().remove()
      }
      // inicializa o plugin
      $('.new-gallery').magnificPopup({
        delegate: 'span',
        type: 'image',
        tLoading: 'Carregando %curr%...',
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        closeOnContentClick: false,
        closeBtnInside: true,
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [ 0, 1 ] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
          verticalFit: true,
          tError: 'A imagem %curr% não foi encontrada.',
          titleSrc: function (item) {
            return item.el.attr('title')
          }
        },
        zoom: {
          enabled: true,
          duration: 300,
          opener: function (element) {
            return element.find('img')
          }
        }
      })
    })
  }

  if (!$.webfacil.isOpen()) {
    $('[wf-href]').replaceWith(function () {
      return $('<a href="' + $(this).attr('wf-href') + '" id="' + $(this).attr('id') + '" class="' + $(this).attr('class') + '" style="text-decoration:none;">' + $(this).html() + '</a>')
    })
  }

})
