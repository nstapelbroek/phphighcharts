<?php
namespace PhpHighCharts;

class Series extends Base
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    public function __construct(
        array $data = array(),
        $name = '',
        $type = null
    ) {
        $this->setData($data);
        $this->setName($name);
        $this->setType($type);
    }

    public function setData($data)
    {
        foreach ($data as &$value) {
            $value = (double) $value;
        }
        $this->data = $data;

        return $this;
    }
}
