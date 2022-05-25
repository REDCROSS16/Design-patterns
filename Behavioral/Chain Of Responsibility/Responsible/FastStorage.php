<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility\Responisble;

use DesignPatterns\Behavioral\ChainOfResponsibility\Handler;

class HttpInMemoryCacheHandler extends Handler
{
    public function __construct(private array $data, ?Handler $successor = null)
    {
        parent::__construct($successor);
    }

    protected function processing(RequestInterface $request): ?string
    {
        $key = sprintf(
            '%s?%s',
            $request->getUri()->getPath(),
            $request->getUri()->getQuery()
        );

        if ($request->getMethod() == 'GET' && isset($this->data[$key])) {
            return $this->data[$key];
        }

        return null;
    }
}