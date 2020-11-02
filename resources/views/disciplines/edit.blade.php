<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ trans_choice('general.disciplines', 2) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-6 py-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('update-discipline', $discipline->id) }}">
                    @csrf
                    @method('PUT')

                    <div>
                        <x-jet-label for="name" value="{{ __('general.name') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" value="{{ $discipline->name }}" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="ml-4">
                            {{ __('general.save') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
