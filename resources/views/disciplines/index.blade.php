<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ trans_choice('general.disciplines', 2) }}
            </h2>
            <a href="{{ route('new-discipline') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                {{ __('general.new') }}
            </a>
        </div>
    </x-slot>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if ($disciplines->count() > 0)
                    <table class="table-auto w-full">
                        <thead>
                            <th class="border w-1/4 px-4 py-2">ID</th>
                            <th class="border w-1/4 px-4 py-2">Nome</th>
                            <th class="border w-1/4 px-4 py-2">Criado em</th>
                            <th class="border w-1/4 px-4 py-2">Editar</th>
                        </thead>
                        <tbody>
                            @foreach ($disciplines as $discipline)
                                <tr>
                                    <td class="border w-1/4 px-4 py-2">{{ $discipline->id }}</td>
                                    <td class="border w-1/4 px-4 py-2">{{ $discipline->name }}</td>
                                    <td class="border w-1/4 px-4 py-2">{{ strftime('%d/%m/%Y %T', strtotime($discipline->created_at)) }}</td>
                                    <td class="border w-1/4 px-4 py-2"><a href="{{ route('edit-discipline', $discipline->id) }}">Editar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="p-6">
                        Ainda não há disciplinas cadastradas
                    </div>
                @endif
            </div>
            <div class="mt-5">
                {!! $disciplines->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
