<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ trans_choice('general.classes', 2) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    @if ($videos->count() > 0)
                        @foreach ($videos as $video)
                            <div class="text-2xl">
                                {{ $video->name }}
                            </div>
                            <div class="mt-6 text-gray-500">
                                Resumo: {{ $video->summary }}
                            </div>
                            <div class="mt-2 text-gray-500">
                                Disciplina: {{ $video->discipline->name }}
                            </div>
                            <div class="mt-2 text-gray-500">
                                Professor responsável: {{ $video->user->name }}
                            </div>
                            <iframe
                                width="560"
                                height="315"
                                src="https://www.youtube.com/embed/{{ $video->code() }}"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                            ></iframe>

                            @if (!$loop->last)
                                <hr class="mt-6">
                            @endif
                        @endforeach
                    @else
                        Ainda não há aulas cadastradas
                    @endif
                </div>
            </div>
            <div class="mt-5">
                {!! $videos->links() !!}
            </div>
        </div>
    </div>
    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> -->
</x-app-layout>
