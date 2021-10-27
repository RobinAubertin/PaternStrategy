<?php

class Context
{
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function doSomething(): void
    {
        $filename = "text.md";
        $content = "Test content";
        $this->strategy->fileAction($filename, $content);
    }
}

interface Strategy
{
    public function fileAction($filename, $content);
}

class Printer implements Strategy
{
    public function fileAction($filename, $content)
    {
        echo $filename;
        echo "<br>";
        echo $content;
        return;
    }
}

class CreateFile implements Strategy
{
    public function fileAction($filename, $content)
    {
        return file_put_contents($filename, $content);
    }
}
