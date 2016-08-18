<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_city_search
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
?>

<div id="connect_form">
    <form method="POST">
        <legend>Поиск города</legend>
        <input type="text" name="city_name" class="input-block-level" placeholder="Город" required='required' />
        <input type="submit" value="Отправить" name="mod_city_search_submitted" class="btn btn-large btn-block btn-info" />
    </form>
    <div id="result"></div>
</div>
