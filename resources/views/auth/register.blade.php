<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('logintrans.User_Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <br>




            <div>
                <x-jet-label for="surname" value="{{ __('logintrans.surname') }}" />
                <x-jet-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus autocomplete="surname" />
            </div>

            <br>



            <br>

            <div>
                <x-jet-label for="nationality" value="{{ __('logintrans.nationality') }}" />
                <x-jet-input id="nationality" class="block mt-1 w-full" type="text" name="nationality" :value="old('nationality')" required autofocus autocomplete="nationality" />
            </div>

            <br>

            <div>
                <x-jet-label for="natID" value="{{ __('logintrans.natID') }}" />
                <x-jet-input id="natID" class="block mt-1 w-full" type="text" name="natID" :value="old('natID')" required autofocus autocomplete="natID" />
            </div>

            <br>

            <div>
                <x-jet-label for="job" value="{{ __('logintrans.job') }}" />
                <x-jet-input id="job" class="block mt-1 w-full" type="text" name="job" :value="old('job')" required autofocus autocomplete="job" />
            </div>
           



            <br>

            <div>
                <x-jet-label for="Address01" value="{{ __('logintrans.Address01') }}" />
                <x-jet-input id="Address01" class="block mt-1 w-full" type="text" name="Address01" :value="old('Address01')" required autofocus autocomplete="Address01" />
            </div>

            <br>

            <div>
                <x-jet-label for="Address02" value="{{ __('logintrans.Address02') }}" />
                <x-jet-input id="Address02"  class="block mt-1 w-full" type="text" name="Address02" :value="old('Address02')" required autofocus autocomplete="Address02" />
            </div>
            <br>

            <div>
                <x-jet-label for="Address03" value="{{ __('logintrans.Address03') }}" />
                <x-jet-input id="Address03" class="block mt-1 w-full" type="text" name="Address03" :value="old('Address03')" required autofocus autocomplete="Address03" />
            </div>

            <br>

            <div>
                <x-jet-label for="salary" value="{{ __('logintrans.salary') }}" />
                <x-jet-input id="salary" class="block mt-1 w-full" type="text" name="salary" :value="old('salary')" required autofocus autocomplete="salary" />
            </div>



















            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('logintrans.email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('logintrans.password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('logintrans.Confpassword') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
