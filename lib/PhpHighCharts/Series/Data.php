<?php
namespace PhpHighCharts\Series;

use PhpHighCharts\Base;

class Data extends Base
{
    private $date;

    private $value;

    public function __construct(\DateTime $date, $value)
    {
        $this->date = $date;
        $this->value = $value;
    }

    public function getConfiguration()
    {
        return array(
            1000 * $this->date->getTimestamp(),
            (float) $this->value
        );
    }
}
