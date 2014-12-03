<?php
namespace PhpHighCharts\Axis;

use PhpHighCharts\Base;

class Labels extends Base
{
    /**
     * @var string
     */
    protected $align;

    /**
     * @var boolean
     */
    protected $enabled;

    /**
     * @var string
     */
    protected $format;

    /**
     * @var integer
     */
    protected $rotation;

    /**
     * @var string
     */
    protected $overflow;

    /**
     * @var array
     */
    protected $staggerLines;

    /**
     * @var PhpHighCharts\Style
     */
    protected $style;

    /**
     * @var integer
     */
    protected $y;
}
