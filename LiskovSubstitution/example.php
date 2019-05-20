<?php

class VideoPlayer {
    public function play($file)
    {
        // play the video
    }
}

class AviVideoPlayer extends VideoPlayer
{
    public function play($file)
    {
        if (pathInfo($file, PATHINFO_EXTENSION) != 'avi')
        {
            throw new Exception; // violates the LSP
        }
    }
}