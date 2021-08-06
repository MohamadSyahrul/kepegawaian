<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (auth()->user()->telegram_chat_id)
                        connected!
                    @else
                        <script async type="application/javascript" src="https://telegram.org/js/telegram-widget.js?7"
                        data-telegram-login="{{ config('services.telegram-bot-api.name') }}" data-size="large"
                        data-auth-url="{{ route('telegram.connect') }}" data-request-access="write"></script>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
