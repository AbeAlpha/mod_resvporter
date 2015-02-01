<?php 
/*------------------------------------------------------------------------
# mod_resvporter - Responsive Viewporter
# ------------------------------------------------------------------------
# author    AbeAlpha
# @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: https://github.com/AbeAlpha/mod_resvporter
-------------------------------------------------------------------------*/

//var dvciframe = 'http://www.example.com';
//Load the current URL//
defined('_JEXEC') or die; 
$doc = JFactory::getDocument();
$doc->addScript('media/jui/js/jquery.min.js', 'text/javascript');
$doc->addScript('modules/mod_resvporter/tmpl/resvporter.js', 'text/javascript');
?>
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="modules/mod_resvporter/tmpl/resvporter.css">
</head>

<body>
  <div class="dvc-bg">
    <input type="radio" id="dvc-aut" class="btn-dvc" name="dvc-radio" checked>
    <label for="dvc-aut" title="Auto"></label>
    <div id="dvc-show">
      <input type="radio" id="dvc-pho" class="btn-dvc" name="dvc-radio"><label for="dvc-pho" title="Old Phone"></label>
      <input type="radio" id="dvc-spp" class="btn-dvc" name="dvc-radio"><label for="dvc-spp" title="Smartphone Portrait"></label>
      <input type="radio" id="dvc-spl" class="btn-dvc" name="dvc-radio"><label for="dvc-spl" title="Smartphone Landscape"></label>
      <input type="radio" id="dvc-tap" class="btn-dvc" name="dvc-radio"><label for="dvc-tap" title="Tablet Portrait"></label>
      <input type="radio" id="dvc-tal" class="btn-dvc" name="dvc-radio"><label for="dvc-tal" title="Tablet Landscape"></label>
    </div>
  </div>
  <table class="dvc-table">
    <tr>
      <td>
        <p align="center">
          <iframe id="dvc-iframe" class="dvc-aut"></iframe>
        </p>
      </td>
    </tr>
  </table>
</body>