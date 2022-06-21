<?php

namespace DesignPatterns\Behavioral\Visitor;
interface RoleVisitor
{
    public function visitUser(User $role);

    public function visitGroup(Group $role);
}