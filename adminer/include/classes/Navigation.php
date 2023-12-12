<?php
/**
 * This file must be included/required in include/bootstrap.inc.php.
 */

/**
 * This class holds static methods that
 * return URLs of certain routes in the
 * application.
 */
class Navigation {
    public static function selectTableData($tableName)
    {
        return h(ME) . 'select=' . urlencode($tableName);
    }

    public static function showTableStructure($tableName)
    {
        return h(ME) . 'table=' . urlencode($tableName);
    }
}