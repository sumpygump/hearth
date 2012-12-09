<?php
/**
 * DemoTarget.php
 * 
 * @category Hearth
 * @package Targets
 * @author Maxwell Vandervelde <Max@MaxVandervelde.com>
 * @version 0.0.0
 * @license http://creativecommons.org/licenses/by-nc-sa/3.0/legalcode
 *          Attribution-NonCommercial-ShareAlike 3.0 Unported
 *          Some Rights Reserved
 */

namespace Hearth\Target;

use Hearth\Target;

/**
 * DemoTarget
 *
 * @category Hearth
 * @package Targets
 * @author Maxwell Vandervelde <Max@MaxVandervelde.com>
 */
class DemoTarget Extends Target
{
    /**
     * main
     *
     * Main task target procedure
     *
     * @access public
     * @return void
     */
    public function main()
    {
        $this->task('chmod', 777);

        return;
    }
    
}
