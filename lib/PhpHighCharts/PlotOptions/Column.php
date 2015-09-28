<?php
namespace PhpHighCharts\PlotOptions;

use PhpHighCharts\Base;

class Column extends Base
{
    /**
     * @var integer
     */
    protected $depth;

    /**
     * @var string
     */
    protected $stacking;

    /**
     * @var PhpHighCharts\PlotOptions\Series\DataLabels
     */
    protected $dataLabels;

    /**
     * @var integer
     */
    protected $pointWidth;
}
