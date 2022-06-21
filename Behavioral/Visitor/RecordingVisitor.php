<?php

namespace DesignPatterns\Behavioral\Visitor;

class Recording implements RoleVisitor
{
    private array $visited = [];

    public function visitGroup(Group $role)
    {
        $this->visited[] = $role;
    }

    public function visitUser(User $role)
    {
        $this->visited[] = $role;
    }

    public function getVisited(): array
    {
        return $this->visited;
    }
}