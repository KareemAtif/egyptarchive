/*
Theme Name: arc
Description: Theme is designed and developed for EgyptArchive.com
Version: 2.0
Date created: 9th Feb 2016
Text Domain: egyptarchive.com
Author: Kareem Atif
Author URI: http://kareematif.me
Theme URI: http://kareematif.me/air
Email: Kareematif@gmail.com | Twitter: @kareematif
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

 */
'use strict';
 (function($){
   $(document).ready(function(){
     // Load AJAX search result
    $('#searchform').on('submit', function(ev){
      ev.preventDefault();
      $.post(
        "<?php echo admin_url('admin-ajax.php') ?>", {
          action : 'ajax_search',
          search: $('#s').val()
        }, function (response) {
          $('body').append(response);
        }
      );
    });
     // Show/hide Search Form
    $('li.search').click(function(){
      $('#search.overlay').show('slide', {direction: 'up'}, 1000);
      $('html').css('overflow', 'hidden');
    });
    function closeOverlay(){
      $('.overlay').hide('slide', {direction: 'up'}, 500);
      $('html').removeAttr('style');
    }
    $('.overlay i.close').click(closeOverlay);
    $(document).keydown(function(e){
      if (e.keyCode == 27) closeOverlay(e);
    });
   });
 })(jQuery);
