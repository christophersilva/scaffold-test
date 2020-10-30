<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if ($students->count() > 0)
                    <table>
                        <thead>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Criado em</th>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ strftime('%d/%m/%Y %T', strtotime($student->created_at)) }}</td>
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
