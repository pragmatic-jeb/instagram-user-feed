<?php

declare(strict_types=1);

namespace Instagram\Model;

class FollowingFeed
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var boolean
     */
    public $hasNextPage;

    /**
     * @var string
     */
    public $endCursor;

    /**
     * @var array
     */
    public $users = [];

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    /**
     * @return bool
     */
    public function hasNextPage(): bool
    {
        return $this->hasNextPage;
    }

    /**
     * @param boolean $hasNextPage
     */
    public function setHasNextPage(bool $hasNextPage): void
    {
        $this->hasNextPage = $hasNextPage;
    }

    /**
     * @return string
     */
    public function getEndCursor(): string
    {
        return $this->endCursor;
    }

    /**
     * @param string|null $endCursor
     */
    public function setEndCursor(?string $endCursor): void
    {
        $this->endCursor = $endCursor;
    }

    /**
     * @return User[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param User $user
     */
    public function addUser(User $user): void
    {
        $this->users[] = $user;
    }

    /**
     * @param User[] $users
     */
    public function setUsers(array $users): void
    {
        $this->users = $users;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'count'       => $this->count,
            'hasNextPage' => $this->hasNextPage,
            'endCursor'   => $this->endCursor,
            'users'       => $this->users,
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
