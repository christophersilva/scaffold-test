<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Videos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if ($videos->count() > 0)
                    <table class="table-auto w-full">
                        <thead>
                            <th class="border w-1/4 px-4 py-2">ID</th>
                            <th class="border w-1/4 px-4 py-2">Nome</th>
                            <th class="border w-1/4 px-4 py-2">Link</th>
                            <th class="border w-1/4 px-4 py-2">Criado em</th>
                        </thead>
                        <tbody>
                            @foreach ($videos as $video)
                                <tr>
                                    <td class="border w-1/4 px-4 py-2">{{ $video->id }}</td>
                                    <td class="border w-1/4 px-4 py-2">{{ $video->name }}</td>
                                    <td class="border w-1/4 px-4 py-2">{{ $video->link }}</td>
                                    <td class="border w-1/4 px-4 py-2">{{ strftime('%d/%m/%Y %T', strtotime($video->created_at)) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    Ainda não há videos cadastrados
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
