<?php
namespace Genkgo\Xsl\Xpath;

use Genkgo\Xsl\Xpath\Functions\Aggregation;
use Genkgo\Xsl\Xpath\Functions\Date;
use Genkgo\Xsl\Xpath\Functions\Math;
use Genkgo\Xsl\Xpath\Functions\Text;

/**
 * Class Functions
 * @package Genkgo\Xsl\Xpath
 */
class Functions
{
    use Aggregation;
    use Math;
    use Text;
    use Date;
}
