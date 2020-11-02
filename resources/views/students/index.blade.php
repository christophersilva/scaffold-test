<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ trans_choice('general.students', 2) }}
            </h2>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if ($students->count() > 0)
                    <table class="table-auto w-full">
                        <thead>
                            <th class="border w-1/4 px-4 py-2">ID</th>
                            <th class="border w-1/4 px-4 py-2">Nome</th>
                            <th class="border w-1/4 px-4 py-2">E-mail</th>
                            <th class="border w-1/4 px-4 py-2">Criado em</th>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td class="border w-1/4 px-4 py-2">{{ $student->id }}</td>
                                    <td class="border w-1/4 px-4 py-2">{{ $student->name }}</td>
                                    <td class="border w-1/4 px-4 py-2">{{ $student->email }}</td>
                                    <td class="border w-1/4 px-4 py-2">{{ strftime('%d/%m/%Y %T', strtotime($student->created_at)) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    Ainda não há alunos cadastrados
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
