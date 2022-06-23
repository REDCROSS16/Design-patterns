<?php

namespace DesignPatterns\Behavioral\Visitor;

interface Role 
{
    public function accept(RoleVisitor $visitor);
}