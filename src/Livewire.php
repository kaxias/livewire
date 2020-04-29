<?php

namespace Livewire;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Livewire\LivewireManager activate($component, $id)
 * @method static \Livewire\LivewireManager component($alias, $viewClass)
 * @method static \Livewire\LivewireManager dispatch($event, ...$params)
 * @method static \Livewire\LivewireManager listen($event, $callback)
 * @method static \Livewire\LivewireManager isLaravel7()
 * @method static \Livewire\LivewireManager registerHydrationMiddleware(array $classes)
 * @method static \Livewire\LivewireManager registerInitialHydrationMiddleware(array $callables)
 * @method static \Livewire\LivewireManager registerInitialDehydrationMiddleware(array $callables)
 * @method static \Livewire\LivewireManager scripts($options = [])
 * @method static \Livewire\LivewireManager styles($options = [])
 * @method static \Livewire\LivewireManager hydrate($instance, $request)
 * @method static \Livewire\LivewireManager dehydrate($instance, $request)
 * @method static \Livewire\LivewireManager test($name, $params = [])
 *
 * @see \Livewire\LivewireManager
 */
class Livewire extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'livewire';
    }
}
