<?php
namespace PhpHighCharts\PlotOptions\Series;

use PhpHighCharts\Base;

class DataLabels extends Base
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
     * @var string
     */
    protected $verticalAlign;
    
    /**
     * @var integer
     */
    protected $y;

    /**
     * @var PhpHighCharts\PlotOptions\Series\Style
     */
    protected $style;
}
