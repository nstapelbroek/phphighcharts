<?php
namespace PhpHighCharts;

class HighChart extends Base
{
    /**
     * @var PhpHighCharts\Chart
     */
    protected $chart;
    
    /**
     * @var PhpHighCharts\Credits
     */
    protected $credits;
    
    /**
     * @var array
     */
    protected $colors = array();
    
    /**
     * @var array
     */
    protected $labels = array();
    
    /**
     * @var PhpHighCharts\Title
     */
    protected $title;

    /**
     * @var PhpHighCharts\Subtitle
     */
    protected $subtitle;

    /**
     * @var array
     */
    protected $series = array();

    /**
     * @var PhpHighCharts\XAxis
     */
    protected $xAxis;

    /**
     * @var PhpHighCharts\YAxis
     */
    protected $yAxis;
    
    public function getMaxSeriesDataCount()
    {
        $maxDataCount = 0;
        foreach ($this->series as $series) {
            $dataCount = count($series->getData());
            if ($dataCount > $maxDataCount) {
                $maxDataCount = $dataCount;
            }
        }
        
        return $maxDataCount;
    }
}
