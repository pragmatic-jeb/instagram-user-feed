<?php

declare(strict_types=1);

namespace Instagram\Model;

use Instagram\Utils\InstagramHelper;

class Media
{
    const TYPE_IMAGE = 'image';
    const TYPE_VIDEO = 'video';
    const TYPE_CAROUSEL = 'carousel';

    const MEDIA_TYPE_IMAGE = 1;
    const MEDIA_TYPE_VIDEO = 2;
    const MEDIA_TYPE_CAROUSEL = 8;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $shortCode;

    /**
     * @var string
     */
    public $typeName = '';

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $width;

    /**
     * @var string
     */
    public $thumbnailSrc;

    /**
     * @var string
     */
    public $link;

    /**
     * @var \DateTime
     */
    public $date;

    /**
     * @var string
     */
    public $displaySrc;

    /**
     * @var string
     */
    public $caption;

    /**
     * @var int
     */
    public $comments;

    /**
     * @var int
     */
    public $likes;

    /**
     * @var array
     */
    public $thumbnails = [];

    /**
     * @var mixed
     */
    public $location;

    /**
     * @var bool
     */
    public $video = false;

    /**
     * @var string
     */
    public $videoUrl = '';

    /**
     * @var int
     */
    public $videoViewCount = 0;

    /**
     * @var string
     */
    public $accessibilityCaption;

    /**
     * @var bool
     */
    public $igtv = false;

    /**
     * @var array
     */
    public $hashtags = [];

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getShortCode(): string
    {
        return $this->shortCode;
    }

    /**
     * @param string $shortCode
     */
    public function setShortCode(string $shortCode): void
    {
        $this->shortCode = $shortCode;
    }

    /**
     * @return string
     */
    public function getTypeName(): string
    {
        return $this->typeName;
    }

    /**
     * @param string $typeName
     */
    public function setTypeName(string $typeName): void
    {
        $this->typeName = $typeName;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return string
     */
    public function getThumbnailSrc(): string
    {
        return $this->thumbnailSrc;
    }

    /**
     * @param string $thumbnailSrc
     */
    public function setThumbnailSrc(string $thumbnailSrc): void
    {
        $this->thumbnailSrc = $thumbnailSrc;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return ?string
     */
    public function getDisplaySrc(): ?string
    {
        return $this->displaySrc;
    }

    /**
     * @param string $displaySrc
     */
    public function setDisplaySrc(string $displaySrc): void
    {
        $this->displaySrc = $displaySrc;
    }

    /**
     * @return string
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @param string $caption
     */
    public function setCaption(?string $caption): void
    {
        $this->caption = $caption;
    }

    /**
     * @return int
     */
    public function getComments(): int
    {
        return $this->comments;
    }

    /**
     * @param int $comments
     */
    public function setComments(int $comments): void
    {
        $this->comments = $comments;
    }

    /**
     * @return int
     */
    public function getLikes(): int
    {
        return $this->likes;
    }

    /**
     * @param int $likes
     */
    public function setLikes(int $likes): void
    {
        $this->likes = $likes;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    /**
     * @return array
     */
    public function getThumbnails(): array
    {
        return $this->thumbnails;
    }

    /**
     * @param array $thumbnails
     */
    public function setThumbnails(array $thumbnails): void
    {
        $this->thumbnails = $thumbnails;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param \StdClass $location
     */
    public function setLocation(\StdClass $location): void
    {
        $this->location = $location;
    }

    /**
     * @return bool
     */
    public function isVideo(): bool
    {
        return $this->video;
    }

    /**
     * @param bool $video
     */
    public function setVideo(bool $video): void
    {
        $this->video = $video;
    }

    /**
     * @return ?string
     */
    public function getVideoUrl(): ?string
    {
        return $this->videoUrl;
    }

    /**
     * @param ?string $videoUrl
     */
    public function setVideoUrl(?string $videoUrl): void
    {
        $this->videoUrl = $videoUrl;
    }

    /**
     * @return int
     */
    public function getVideoViewCount(): int
    {
        return $this->videoViewCount;
    }

    /**
     * @param int $videoViewCount
     */
    public function setVideoViewCount(int $videoViewCount): void
    {
        $this->videoViewCount = $videoViewCount;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id'                   => $this->id,
            'shortcode'            => $this->shortCode,
            'typeName'             => $this->typeName,
            'height'               => $this->height,
            'width'                => $this->width,
            'thumbnailSrc'         => $this->thumbnailSrc,
            'link'                 => $this->link,
            'date'                 => $this->date,
            'displaySrc'           => $this->displaySrc,
            'caption'              => $this->caption,
            'comments'             => $this->comments,
            'likes'                => $this->likes,
            'thumbnails'           => $this->thumbnails,
            'location'             => $this->location,
            'video'                => $this->video,
            'videoUrl'             => $this->videoUrl,
            'igtv'                 => $this->igtv,
            'videoViewCount'       => $this->videoViewCount,
            'accessibilityCaption' => $this->accessibilityCaption,
            'hashtags'             => $this->hashtags
        ];
    }

    /**
     * @return array
     */
    public function __serialize(): array
    {
        return $this->toArray();
    }


    /**
     * @return string|null
     */
    public function getAccessibilityCaption(): ?string
    {
        return $this->accessibilityCaption;
    }

    /**
     * @param string|null $accessibilityCaption
     */
    public function setAccessibilityCaption(?string $accessibilityCaption): void
    {
        $this->accessibilityCaption = $accessibilityCaption;
    }

    /**
     * @return bool
     */
    public function isIgtv(): bool
    {
        return $this->igtv;
    }

    /**
     * @param bool $igtv
     */
    public function setIgtv(bool $igtv): void
    {
        $this->igtv = $igtv;
    }

    /**
     * @return array
     */
    public function getHashtags(): array
    {
        return InstagramHelper::buildHashtags($this->caption);
    }

    /**
     * @param array $hashtags
     */
    public function setHashtags(array $hashtags): void
    {
        $this->hashtags = $hashtags;
    }

    /**
     * @return int
     */
    public function getOwnerId(): ?int
    {
        return $this->ownerId;
    }

    /**
     * @param int $ownerId
     */
    public function setOwnerId(int $ownerId): void
    {
        $this->ownerId = $ownerId;
    }
}
