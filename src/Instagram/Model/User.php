<?php

declare(strict_types=1);

namespace Instagram\Model;

class User
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var string
     */
    public $profilePicUrl;

    /**
     * @var boolean
     */
    public $ispublic;

    /**
     * @var boolean
     */
    public $isVerified;

    /**
     * @var boolean
     */
    public $followedByViewer;

    /**
     * @var boolean
     */
    public $requestedByViewer;

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
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @param string $profilePicUrl
     */
    public function setProfilePicUrl(string $profilePicUrl): void
    {
        $this->profilePicUrl = $profilePicUrl;
    }

    /**
     * @return string
     */
    public function getProfilePicUrl(): string
    {
        return $this->profilePicUrl;
    }

    /**
     * @param string $fullName
     */
    public function setFullName(string $fullName): void
    {
        $this->fullName = $fullName;
    }


    /**
     * @return bool
     */
    public function ispublic(): bool
    {
        return $this->ispublic;
    }

    /**
     * @param bool $ispublic
     */
    public function setIspublic(bool $ispublic): void
    {
        $this->ispublic = $ispublic;
    }

    /**
     * @return bool
     */
    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    /**
     * @param bool $isVerified
     */
    public function setIsVerified(bool $isVerified): void
    {
        $this->isVerified = $isVerified;
    }

    /**
     * @return bool
     */
    public function isFollowedByViewer(): bool
    {
        return $this->followedByViewer;
    }

    /**
     * @param bool $followedByViewer
     */
    public function setFollowedByViewer(bool $followedByViewer): void
    {
        $this->followedByViewer = $followedByViewer;
    }

    /**
     * @return bool
     */
    public function isRequestedByViewer(): bool
    {
        return $this->requestedByViewer;
    }

    /**
     * @param bool $requestedByViewer
     */
    public function setRequestedByViewer(bool $requestedByViewer): void
    {
        $this->requestedByViewer = $requestedByViewer;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id'                => $this->id,
            'userName'          => $this->userName,
            'fullName'          => $this->fullName,
            'profilePicUrl'     => $this->profilePicUrl,
            'ispublic'         => $this->ispublic,
            'isVerified'        => $this->isVerified,
            'followedByViewer'  => $this->followedByViewer,
            'requestedByViewer' => $this->requestedByViewer,
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
