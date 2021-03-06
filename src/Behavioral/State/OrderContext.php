<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State;

class OrderContext
{
    private State $state;

    public static function create(): self
    {
        $order = new self();
        $order->state = new StateCreated();

        return $order;
    }

    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function proceedToNext(): void
    {
        $this->state->proceedToNext($this);
    }

    public function toString(): string
    {
        return $this->state->toString();
    }
}
