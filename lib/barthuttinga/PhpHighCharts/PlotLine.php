<?php
namespace PhpHighCharts;

class PlotLine extends Base
{
    /**
     * @var string
     */
	protected $color;

    /**
     * @var float
     */
	protected $value;
    
    /**
     * @var float
     */
	protected $width;
    
    public function __construct($value = null, $width = null, $color = null)
    {
        $this->setValue($value);
        $this->setWidth($value);
        $this->setColor($color);
    }
}
