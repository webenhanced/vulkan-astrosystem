<?php
/**
 * Class for house display
 *
 * @copyright Copyright &copy; 2016 astrolog-online.net
 * @author Zemlyansky Alexander <meraponimaniya@mail.ru>
 * @package VisualChart
 * @since 0.1
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace vulkan\Components\VisualChart;

use vulkan\Core\AstroPoint;
use vulkan\Core\C;
use vulkan\Core\House;

class VisualHouse extends House
{
    use CommonVisualParamsTrait;

    public $visible = true;
    public $selected;

}