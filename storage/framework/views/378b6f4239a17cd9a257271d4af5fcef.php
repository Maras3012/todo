<?php

use Livewire\Volt\Actions;
use Livewire\Volt\CompileContext;
use Livewire\Volt\Contracts\Compiled;
use Livewire\Volt\Component;

new class extends Component implements Livewire\Volt\Contracts\FunctionalComponent
{
    public static CompileContext $__context;

    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

    public $name;

    public function mount()
    {
        (new Actions\InitializeState)->execute(static::$__context, $this, get_defined_vars());

        (new Actions\CallHook('mount'))->execute(static::$__context, $this, get_defined_vars());
    }

    #[\Livewire\Attributes\Computed()]
    public function todos()
    {
        $arguments = [static::$__context, $this, func_get_args()];

        return (new Actions\CallMethod('todos'))->execute(...$arguments);
    }

    public function save()
    {
        $arguments = [static::$__context, $this, func_get_args()];

        return (new Actions\CallMethod('save'))->execute(...$arguments);
    }

    public function completed(\App\Models\Todo $todo)
    {
        $arguments = [static::$__context, $this, func_get_args()];

        return (new Actions\CallMethod('completed'))->execute(...$arguments);
    }

    public function delete(\App\Models\Todo $todo)
    {
        $arguments = [static::$__context, $this, func_get_args()];

        return (new Actions\CallMethod('delete'))->execute(...$arguments);
    }

    protected function rules()
    {
        return (new Actions\ReturnRules)->execute(static::$__context, $this, []);
    }

};