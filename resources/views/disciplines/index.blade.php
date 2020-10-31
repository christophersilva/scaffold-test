<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Disciplines') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if ($disciplines->count() > 0)
                    <table class="table-auto w-full">
                        <thead>
                            <th class="border w-1/4 px-4 py-2">ID</th>
                            <th class="border w-1/4 px-4 py-2">Nome</th>
                            <th class="border w-1/4 px-4 py-2">Criado em</th>
                        </thead>
                        <tbody>
                            @foreach ($disciplines as $discipline)
                                <tr>
                                    <td class="border w-1/4 px-4 py-2">{{ $discipline->id }}</td>
                                    <td class="border w-1/4 px-4 py-2">{{ $discipline->name }}</td>
                                    <td class="border w-1/4 px-4 py-2">{{ strftime('%d/%m/%Y %T', strtotime($discipline->created_at)) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    Ainda não há disciplinas cadastradas
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
