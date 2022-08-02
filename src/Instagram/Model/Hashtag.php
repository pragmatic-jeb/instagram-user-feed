<?php

declare(strict_types=1);

namespace Instagram\Model;

class Hashtag
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $allowFollowing;

    /**
     * @var bool
     */
    public $following;

    /**
     * @var bool
     */
    public $topMediaOnly;

    /**
     * @var int
     */
    public $mediaCount = 0;

    /**
     * @var string
     */
    public $profilePicture;

    /**
     * @var Media[]
     */
    public $medias = [];

    /**
     * @var bool
     */
    public $hasMoreMedias = false;

    /**
     * @var string
     */
    public $endCursor = null;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function isTopMediaOnly(): bool
    {
        return $this->topMediaOnly;
    }

    /**
     * @param bool $topMediaOnly
     */
    public function setTopMediaOnly(bool $topMediaOnly): void
    {
        $this->topMediaOnly = $topMediaOnly;
    }

    /**
     * @return bool
     */
    public function isFollowing(): bool
    {
        return $this->following;
    }

    /**
     * @param bool $following
     */
    public function setFollowing(bool $following): void
    {
        $this->following = $following;
    }

    /**
     * @return string
     */
    public function getProfilePicture(): string
    {
        return $this->profilePicture;
    }

    /**
     * @param string $profilePicture
     */
    public function setProfilePicture(string $profilePicture): void
    {
        $this->profilePicture = $profilePicture;
    }

    /**
     * @return bool
     */
    public function isAllowFollowing(): bool
    {
        return $this->allowFollowing;
    }

    /**
     * @param bool $allowFollowing
     */
    public function setAllowFollowing(bool $allowFollowing): void
    {
        $this->allowFollowing = $allowFollowing;
    }

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
     * @return int
     */
    public function getMediaCount(): int
    {
        return $this->mediaCount;
    }

    /**
     * @param int $mediaCount
     */
    public function setMediaCount(int $mediaCount): void
    {
        $this->mediaCount = $mediaCount;
    }

    /**
     * @return Media[]
     */
    public function getMedias(): array
    {
        return $this->medias;
    }

    /**
     * @param Media $media
     */
    public function addMedia(Media $media): void
    {
        $this->medias[] = $media;
    }

    public function setHasMoreMedias(bool $hasMoreMedias): void
    {
        $this->hasMoreMedias = $hasMoreMedias;
    }

    /**
     * @return bool
     */
    public function hasMoreMedias(): bool
    {
        return $this->hasMoreMedias;
    }

    /**
     * @param string|null $endCursor
     */
    public function setEndCursor(?string $endCursor): void
    {
        $this->endCursor = $endCursor;
    }

    /**
     * @return string|null
     */
    public function getEndCursor(): ?string
    {
        return $this->endCursor;
    }

    /**
     * @param Media[] $medias
     */
    public function setMedias(array $medias): void
    {
        $this->medias = $medias;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id'             => $this->id,
            'name'           => $this->name,
            'allowFollowing' => $this->allowFollowing,
            'following'      => $this->following,
            'topMediaOnly'   => $this->topMediaOnly,
            'mediaCount'     => $this->mediaCount,
            'profilePicture' => $this->profilePicture,
            'medias'         => array_map(function ($media) {
                return $media->toArray();
            }, $this->medias),
            'hasMoreMedias'  => $this->hasMoreMedias,
            'endCursor'      => $this->endCursor
        ];
    }

    /**
     * @return array
     */
    public function __serialize(): array
    {
        return $this->toArray();
    }
}
