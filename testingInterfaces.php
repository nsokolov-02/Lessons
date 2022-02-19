<?php

interface Logger
{
    public function log($message);
}

class FileLogger implements Logger
{
    private $handle;

    protected file $logFile;

    public function __construct($filename,  $mode = 'a') {
        $this->logFile = $filename;
        $this->handle = fopen($filename, $mode)
            or die('Could not open the log file');
    }

    public function log($message) {
        $message = date('F j, Y, g:i a') . ': ' . $message . "\n";
        fwrite($this->handle, $message);
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        if ($this->handle) {
            fclose($this->handle);
        }
    }
}

class DatabaseLogger implements Logger
{
    public function log($message)
    {
        echo sprintf("Log %s to the database\n", $message);
    }
}

$logger = new FileLogger('./log.txt', 'w');
$logger->log('PHP interface is awesome');

$loggers = [
    new FileLogger('./log.txt'),
    new DatabaseLogger()
];

foreach ($loggers as $logger) {
    $logger->log('Log message');
}
