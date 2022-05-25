<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

abstract class Handler
{
    public function __construct(private ?Handler $successor = null)
    {
    }

    final public function handle(RequestInterface $request): ?string
    {
        $processed = $this->processing($request);

        if ($processed === null && $this->successor) {
            $processed = $this->successor->handle($request);
        }

        return $processed;
    }
}