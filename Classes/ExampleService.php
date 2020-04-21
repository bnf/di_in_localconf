<?php
namespace Bnf\DiInLocalconf;

use TYPO3\CMS\Core\Configuration\SiteConfiguration;

/**
 * ExampleService
 *
 * @author Benjamin Franzke <bfr@qbus.de>
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class ExampleService
{

    public function __construct(SiteConfiguration $siteConfiguration)
    {
    }

    public function doFoo(): void
    {
    }
}
