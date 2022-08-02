<?php

declare(strict_types=1);

namespace Instagram\Model;

class ProfileStory
{
    /**
     * @var bool
     */
    public $allowedToReply;

    /**
     * @var \StdClass
     */
    public $owner;

    /**
     * @var bool
     */
    public $reshareable;

    /**
     * @var \DateTime
     */
    public $expiringDate;

    /**
     * @var array
     */
    public $stories = [];

    /**
     * @return bool
     */
    public function isAllowedToReply(): bool
    {
        return $this->allowedToReply;
    }

    /**
     * @param bool $allowedToReply
     */
    public function setAllowedToReply(bool $allowedToReply): void
    {
        $this->allowedToReply = $allowedToReply;
    }

    /**
     * @return \StdClass
     */
    public function getOwner(): \StdClass
    {
        return $this->owner;
    }

    /**
     * @param \StdClass $owner
     */
    public function setOwner(\StdClass $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return bool
     */
    public function isReshareable(): bool
    {
        return $this->reshareable;
    }

    /**
     * @param bool $reshareable
     */
    public function setReshareable(bool $reshareable): void
    {
        $this->reshareable = $reshareable;
    }

    /**
     * @return \DateTime
     */
    public function getExpiringDate(): \DateTime
    {
        return $this->expiringDate;
    }

    /**
     * @param \DateTime $expiringDate
     */
    public function setExpiringDate(\DateTime $expiringDate): void
    {
        $this->expiringDate = $expiringDate;
    }

    /**
     * @param StoryMedia $story
     */
    public function addStory(StoryMedia $story): void
    {
        $this->stories[] = $story;
    }

    /**
     * @return StoryMedia[]
     */
    public function getStories(): array
    {
        return $this->stories;
    }
}
