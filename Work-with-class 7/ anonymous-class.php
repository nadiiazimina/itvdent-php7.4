<?php

//ананимные классы - класс который не имеет имени 

$a = new class
{
    public function anon(){}
};

class LogWriter
{
    public function write($logger)
    {
        $logger->log();
    }
}

$writer = new LogWriter();
$writer -> write(new class
{
    public function log()
    {
        echo "this is test logger";
    }
});