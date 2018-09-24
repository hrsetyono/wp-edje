/*
  Sharedaddy
*/

(function( $ ) {
  document.addEventListener('DOMContentLoaded', start)

  function start() {
    // copy the hidden links to main UL
    $('.share-more').on( 'click', function( e ) {
      e.preventDefault();

      $(this).closest('li').remove();

      var hiddenLinks = $('.sharing-hidden ul').html();
      $('.sd-content ul').append( hiddenLinks );
    });

    // print
    $('.share-print').on( 'click', function( e ) {
      e.preventDefault(); e.stopPropagation();
      window.print();
    } );
  }
})( jQuery );

/*
  Responsive Videos
  @version 6.5
*/
!function(t){function a(){t(".jetpack-video-wrapper").find("embed, iframe, object").each(function(){var a,e,i,r,h,d,o;a=t(this),d=0,"center"===a.parents(".jetpack-video-wrapper").prev("p").css("text-align")&&(d="0 auto"),a.attr("data-ratio")||a.attr("data-ratio",this.height/this.width).attr("data-width",this.width).attr("data-height",this.height).css({display:"block",margin:d}),e=a.attr("data-width"),i=a.attr("data-height"),r=a.attr("data-ratio"),h=a.parent(),o=h.width(),"Infinity"===r&&(e="100%"),a.removeAttr("height").removeAttr("width"),e>o?a.width(o).height(o*r):a.width(e).height(i)})}var e;t(document).ready(function(){t(window).on("load.jetpack",a).on("resize.jetpack",function(){clearTimeout(e),e=setTimeout(a,500)}).on("post-load.jetpack",a).resize()})}(jQuery);
