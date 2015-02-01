/*------------------------------------------------------------------------
# mod_resvporter - Responsive Viewporter
# ------------------------------------------------------------------------
# author    AbeAlpha
# @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: https://github.com/AbeAlpha/mod_resvporter
-------------------------------------------------------------------------*/

//var dvciframe = 'http://www.example.com';
//Load the current URL//
var dvciframe = window.location.href + "/";

$(document).ready(function() {
  $("#dvc-show").click(function() {
    $("#dvc-iframe").attr("src", src = dvciframe);
    $("#dvc-show").off();
  });
  $("#dvc-aut").click(function() {
    $('.dvc-table').fadeOut('fast', function() {
      $(".dvc-aut").removeClass("dvc-pho dvc-spp dvc-spl dvc-tap dvc-tal");
    });
  });
  $("#dvc-pho").click(function() {
    $('.dvc-table').fadeIn('fast');
    $(".dvc-aut").removeClass("dvc-spp dvc-spl dvc-tap dvc-tal").addClass("dvc-pho");
  });
  $("#dvc-spp").click(function() {
    $('.dvc-table').fadeIn('fast');
    $(".dvc-aut").removeClass("dvc-pho dvc-spl dvc-tap dvc-tal").addClass("dvc-spp");
  });
  $("#dvc-spl").click(function() {
    $('.dvc-table').fadeIn('fast');
    $(".dvc-aut").removeClass("dvc-pho dvc-spp dvc-tap dvc-tal").addClass("dvc-spl");
  });
  $("#dvc-tap").click(function() {
    $('.dvc-table').fadeIn('fast');
    $(".dvc-aut").removeClass("dvc-pho dvc-spp dvc-spl dvc-tal").addClass("dvc-tap");
  });
  $("#dvc-tal").click(function() {
    $('.dvc-table').fadeIn('fast');
    $(".dvc-aut").removeClass("dvc-pho dvc-spp dvc-spl dvc-tap").addClass("dvc-tal");
  });
});

