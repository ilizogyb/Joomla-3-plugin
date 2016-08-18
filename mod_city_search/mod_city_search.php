<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_city_search
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
    defined('_JEXEC') or die('Restricted access');
    require( JModuleHelper::getLayoutPath( 'mod_city_search' ) );

    require_once __DIR__ . '/helper.php';
?>

<script>
(function ($) {
	$(document).on('click', 'input[type=submit]', function () {
		var value   = $('input[name=city_name]').val(),
			request = {
					'option' : 'com_ajax',
					'module' : 'city_search',
					'data'   : value,
					'format' : 'json'
				};
		$.ajax({
			type   : 'POST',
			data   : request,
			success: function (response) {
  				console.log(response);
				if(response.data){
                    cityData = JSON.parse(response.data);
                    if (cityData.length === 0) {
                        $('#result').html('City ID: не найден в базе...');
                    } else {
                        $('#result').html('City ID: ' + cityData[0].id);
                    }
                }
			},
			error: function(response) {
                console.log('error with AJAX request');
	        }
 
		});
		return false;
	});
})(jQuery)
</script>
