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
     * @var integer
     */
    protected $minRange;

    /**
     * @var array
     */
    protected $plotBands;

    /**
     * @var array
     */
    protected $plotLines;

    /**
     * @var boolean
     */
    protected $showLastLabel;

    /**
     * @var integer
     */
    protected $tickInterval;

    /**
     * @var integer
     */
    protected $tickLength;

    /**
     * @var string
     */
    protected $tickmarkPlacement;

    /**
     * @var integer
     */
    protected $tickWidth;

    /**
     * @var PhpHighCharts\Title
     */
    protected $title;
}
