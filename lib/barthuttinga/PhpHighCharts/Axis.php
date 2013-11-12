<?php
namespace PhpHighCharts;

class Axis extends Base
{
    /**
     * @var integer
     */
    protected $gridLineWidth;
    
    /**
     * @var PhpHighCharts\Axis\Labels
     */
    protected $labels;
    
    /**
     * @var integer
     */
    protected $lineWidth;
    
    /**
     * @var integer
     */
    protected $max;
    
    /**
     * @var integer
     */
    protected $min;
    
    /**
     * @var array
     */
    protected $plotBands;
    
    /**
     * @var array
     */
    protected $plotLines;
    
    /**
     * @var integer
     */
    protected $tickLength;
    
    /**
     * @var integer
     */
    protected $tickWidth;
    
    /**
     * @var PhpHighCharts\Title
     */
    protected $title;
}
