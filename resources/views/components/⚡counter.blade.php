<?php

use Livewire\Component;

new class extends Component
{
    public int $count = 0;

    public function increment()
    {
        $this->count++;
    }
};
?>

<div class="p-6 bg-white rounded-xl shadow-md flex flex-col items-center justify-center space-y-4">
    <h2 class="text-2xl font-bold text-gray-800">Livewire 4 Counter</h2>
    <div class="text-4xl font-extrabold text-blue-600">{{ $count }}</div>
    <button wire:click="increment" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg shadow transition-colors">
        Increment
    </button>
</div>