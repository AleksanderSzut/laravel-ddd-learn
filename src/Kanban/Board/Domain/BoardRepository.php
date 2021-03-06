<?php

declare(strict_types=1);

namespace App\Kanban\Board\Domain;

use App\Shared\Domain\Criteria\Criteria;

interface BoardRepository
{
    public function delete(BoardId $id): void;

    public function find(BoardId $id): ?Board;

    public function save(Board $board): void;

    public function search(Criteria $criteria): Boards;
}
