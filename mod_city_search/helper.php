<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_login
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

class modCitySearchHelper {

    public static function getAjax() {
        $cityName  = JFactory::getApplication()->input->get('data');
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
        
        $query->select($db->quoteName(array('id', 'title')));
        $query->from($db->quoteName('#__citis'));
        $query->where($db->quoteName('title') . ' LIKE ' . $db->quote($cityName));
        $db->setQuery($query);
        
        $result = $db->loadObjectList();
        return  json_encode($result);
    }
}