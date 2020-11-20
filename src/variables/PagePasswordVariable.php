<?php
/**
 * Page Password plugin for Craft CMS 3.x
 *
 * A simple plugin that allows you to password protect a page.
 *
 * @link      https://www.jesseward.com
 * @copyright Copyright (c) 2018 Jesse Ward
 */

namespace jesseward\pagepassword\variables;

use jesseward\pagepassword\PagePassword;

use Craft;
use craft\elements\Entry;

/**
 * @author    Jesse Ward
 * @package   PagePassword
 * @since     0.1.0
 */
class PagePasswordVariable
{
    // Public Methods
    // =========================================================================

    public function accessGranted($id)
    {
        $cookie = md5($id);
        return array_key_exists($cookie, $_COOKIE);
    }
}
