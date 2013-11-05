<?php
namespace PhpHighCharts;

class Axis extends Base
{
    /**
     * @var PhpHighCharts\Axis\Labels
     */
    protected $labels;
    
    /**
     * @var array
     */
    protected $plotBands;
    
    /**
     * @var array
     */
    protected $plotLines;
    
    /**
     * @var PhpHighCharts\Title
     */
    protected $title;
    
    /**
     * @var integer
     */
    protected $min;
    
    /**
     * @var integer
     */
    protected $max;
}
