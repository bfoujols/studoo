<?php

namespace ManageStudent\Service\Config;

class FileConfig
{
    private string $fileName = "mstud";
    private string $extConfig = ".json";
    private string $extLock = ".lock";
    protected string $fileLock;

    public function __construct()
    {
        $this->fileLock = $this->fileName . $this->extLock;
    }

}