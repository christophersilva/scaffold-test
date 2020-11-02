<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ trans_choice('general.videos', 2) }}
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
                <form method="POST" action="{{ route('create-video') }}">
                    @csrf

                    <div>
                        <x-jet-label for="name" value="{{ __('general.name') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="link" value="{{ __('general.link') }}" />
                        <x-jet-input id="link" class="block mt-1 w-full" type="text" name="link" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="summary" value="{{ __('general.summary') }}" />
                        <x-jet-input id="summary" class="block mt-1 w-full" type="text" name="summary" required />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="discipline_id" value="{{ trans_choice('general.disciplines', 1) }}" />
                        <select class="form-select rounded-md shadow-sm block mt-1 w-full" id="discipline_id" name="discipline_id" required>
                            @foreach ($disciplines as $discipline)
                                <option value="{{ $discipline->id }}">{{ $discipline->name }}</option>
                            @endforeach
                        </select>
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
