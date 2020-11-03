<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ trans_choice('general.videos', 2) }}
            </h2>
            <a href="{{ route('new-video') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150 ml-4">
                {{ __('general.new') }}
            </a>
        </div>
    </x-slot>

    @if ($message = Session::get('success'))
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            </div>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if ($videos->count() > 0)
                    <table class="table-auto w-full">
                        <thead>
                            <th class="border w-1/4 px-4 py-2">ID</th>
                            <th class="border w-1/4 px-4 py-2">Nome</th>
                            <th class="border w-1/4 px-4 py-2">Link</th>
                            <th class="border w-1/4 px-4 py-2">Disciplina</th>
                            <th class="border w-1/4 px-4 py-2">Criado em</th>
                            <th class="border w-1/4 px-4 py-2">Editar</th>
                        </thead>
                        <tbody>
                            @foreach ($videos as $video)
                                <tr>
                                    <td class="border w-1/4 px-4 py-2">{{ $video->id }}</td>
                                    <td class="border w-1/4 px-4 py-2">{{ $video->name }}</td>
                                    <td class="border w-1/4 px-4 py-2">{{ $video->link }}</td>
                                    <td class="border w-1/4 px-4 py-2">{{ $video->discipline->name }}</td>
                                    <td class="border w-1/4 px-4 py-2">{{ strftime('%d/%m/%Y %T', strtotime($video->created_at)) }}</td>
                                    <td class="border w-1/4 px-4 py-2"><a href="{{ route('edit-video', $video->id) }}">Editar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="p-6">
                        Ainda não há videos cadastrados
                    </div>
                @endif
            </div>
            <div class="mt-5">
                {!! $videos->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
