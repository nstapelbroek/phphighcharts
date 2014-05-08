<?php
namespace PhpHighCharts\PlotOptions;

use PhpHighCharts\Base;

class Pie extends Base
{
    /**
     * @var array
     */
    protected $center;

    /**
     * @var boolean
     */
    protected $shadow;

    public function setCenter($x, $y)
    {
        $this->center = array($x, $y);

        return $this;
    }
}
