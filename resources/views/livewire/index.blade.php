<div class="p-6 space-y-8">
    {{-- Stats Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        {{-- First Stats Card --}}
        <div class="bg-white dark:bg-zinc-900 rounded-xl shadow-sm border border-zinc-200 dark:border-zinc-700 p-6">
            <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">Total Posts</p>
            <p class="mt-2 text-3xl font-bold text-zinc-900 dark:text-white">{{ $this->totalPostsCount }}</p>
            <div class="m-2 border-2 border-blue-500 px-2 py-1 rounded-xl">
                Today Posts Count: {{ $this->todayPostsCount }}
                <button type="button" class="bg-blue-800 rounded-2xl p-1 text-white" wire:click="$refresh">
                    Refresh Today Posts Count
                </button>
            </div>
            <button class="btn bg-blue-500 text-white px-2 py-1 rounded-xl" type="button" wire:click="$refresh">Refresh</button>
        </div>

        {{-- This Year Stats Card --}}
        <div class="bg-white dark:bg-zinc-900 rounded-xl shadow-sm border border-zinc-200 dark:border-zinc-700 p-6">
            <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">This Year</p>
            <p class="mt-2 text-3xl font-bold text-zinc-900 dark:text-white">{{ $this->yearlyPostsCount }}</p>
            <button class="btn bg-blue-500 text-white px-2 py-1 rounded-xl" type="button" wire:click="$refresh">Refresh</button>
        </div>

        {{-- This Month Stats Card --}}
        <div class="bg-white dark:bg-zinc-900 rounded-xl shadow-sm border border-zinc-200 dark:border-zinc-700 p-6">
            <p class="text-sm font-medium text-zinc-500 dark:text-zinc-400">This Month</p>
            <p class="mt-2 text-3xl font-bold text-zinc-900 dark:text-white">{{ $this->monthlyPostsCount }}</p>
            <button class="btn bg-blue-500 text-white px-2 py-1 rounded-xl" type="button" wire:click="$refresh">Refresh</button>
        </div>
    </div>

    {{-- Posts Table --}}
    <div class="bg-white dark:bg-zinc-800 rounded-xl shadow-sm border border-zinc-200 dark:border-zinc-700">
        <table class="min-w-full divide-y divide-zinc-200 dark:divide-zinc-700">
            <thead class="bg-zinc-50 dark:bg-zinc-900">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-zinc-500 dark:text-zinc-400 uppercase">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-zinc-500 dark:text-zinc-400 uppercase">
                        Title
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-200 dark:divide-zinc-700">
                @forelse ($this->posts as $post)
                    <tr wire:key="post-{{ $post->id }}" class="hover:bg-zinc-50 dark:hover:bg-zinc-700/50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-500 dark:text-zinc-400">
                            {{ $post->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-zinc-900 dark:text-white">
                            {{ $post->title }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="px-6 py-12 text-center text-sm text-zinc-500 dark:text-zinc-400">
                            No posts found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="m-3 p-2">
            <button wire:click="loadMore" class="bg-blue-700 text-white p-2 rounded-2xl">Load More</button>
        </div>
    </div>
</div>
