<style>
    @font-face {
        font-family: 'Battambang', cursive;

        src:url("https://fonts.googleapis.com/css2?family=Battambang&display=swap");
    }

</style>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{--<x-jet-authentication-card-logo />--}}
        </x-slot>
        <h1 style="text-align: center;font-family: Battambang">Verify Email</h1><br>

        <div class="mb-4 text-sm text-gray-600" style="font-family: Battambang">
            {{ __('សូមអរគុណសម្រាប់ការចុះឈ្មោះ! មុនពេលចាប់ផ្តើមតើអ្នកអាចផ្ទៀងផ្ទាត់អាសយដ្ឋានអ៊ីមែលរបស់អ្នកដោយចុចលើតំណដែលយើងទើបតែផ្ញើអ៊ីមែលទៅអ្នកទេ? ប្រសិនបើអ្នកមិនបានទទួលអ៊ីម៉ែលទេយើងនឹងផ្ញើរសារទៅអ្នកដោយរីករាយ។') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between" style="font-family: Battambang">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{--{{ __('Resend Verification Email') }}--}}
                        បញ្ជូនម្ដងទៀត
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900"​ style="text-decoration: none">
                    {{--{{ __('Logout') }}--}}
                    ចាកចេញ
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
