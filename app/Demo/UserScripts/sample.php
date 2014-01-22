<?php
namespace Demo\UserScripts;

/**
*
* @author Stéphane BRUN
*/
class SampleTask implements \Scripts\iTask
{
    private $cli;

    public function __construct($cli)
    {
        $this->cli = $cli;
    }

    public function help()
    {
        $this->cli->out("This is the help\n");
    }

    public function run()
    {
        $this->cli->out("Sample te salue\n");
    }
}

