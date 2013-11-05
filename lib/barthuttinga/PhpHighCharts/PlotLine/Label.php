<?php
namespace PhpHighCharts\PlotLine;

use PhpHighCharts\Base;

class Label extends Base
{
    /**
     * @var string
     */
    protected $align;
    
    /**
     * @var integer
     */
    protected $rotation;
    
    /**
     * @var PhpHighCharts\Style
     */
    protected $style;
    
    /**
     * @var string
     */
    protected $text;

    /**
     * @var integer
     */
    protected $x;

    /**
     * @var integer
     */
    protected $y;
}
