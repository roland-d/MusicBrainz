<?php

namespace MusicBrainz\Value;

/**
 * A flag to mark recordings as videos
 */
class VideoFlag
{
    /**
     * True for a video recording, otherwise false
     *
     * @var bool
     */
    private $video;

    /**
     * Constructs a video flag.
     *
     * @param bool $flag True for a video recording, otherwise false
     */
    public function __construct(bool $flag = false)
    {
        $this->video = $flag;
    }

    /**
     * Returns the flag.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->video;
    }
}
