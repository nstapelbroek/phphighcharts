<?php
namespace PhpHighCharts;

use PhpHighCharts;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
use Symfony\Component\HttpKernel\KernelInterface;

final class Exporter
{
    private $imageWidth = 3500;

    private $imageType = 'svg';

    private $cacheDir;

    private $phantomJsBinary;

    private $conversionScript;

    private $generatedCacheFiles = array();

    private $generatedChartFiles = array();

    public function __construct($phantomJsBinary, $conversionScript, $cacheDir)
    {
        // create cache path if needed
        $this->cacheDir = $cacheDir;
        if (!is_dir($this->cacheDir)) {
            mkdir($this->cacheDir);
        }

        // tools
        $this->phantomJsBinary  = realpath($phantomJsBinary);
        $this->conversionScript = realpath($conversionScript);

        if (!$this->phantomJsBinary) {
            throw new \RuntimeException("PhantomJS binary not found at $this->phantomJsBinary");
        }

        if (!$this->conversionScript) {
            throw new \RuntimeException("Highcharts coversion script not found at $this->conversionScript");
        }
    }

    public function __destruct()
    {
        $this->cleanupCacheFiles();
    }

    public function export(PhpHighCharts\HighChart $chart)
    {
        // put chart JSON in tmp file
        $hash = md5($chart->__toString());
        $dataFile = $this->cacheDir . '/' . $hash . '-chart-data.json';
        file_put_contents($dataFile, $chart);
        $this->generatedCacheFiles[] = $dataFile;

        // create file for chart ouput using PhantomJS and HighCharts' export script
        $chartFile = $this->cacheDir . '/' . $hash . '-chart.' . $this->imageType;
        $command = sprintf(
            "%s %s -infile %s -outfile %s -width %s 2>&1",
            $this->phantomJsBinary,
            $this->conversionScript,
            $dataFile,
            $chartFile,
            $this->imageWidth
        );
        exec($command);
        $this->generatedChartFiles[] = $chartFile;

        return $chartFile;
    }

    public function cleanupCacheFiles()
    {
        foreach ($this->generatedCacheFiles as $file) {
            @unlink($file);
        }
    }

    public function cleanupChartFiles()
    {
        foreach ($this->generatedChartFiles as $file) {
            @unlink($file);
        }
    }
}
