<x-guest-layout>
    <div class="register-container">
        <div class="register-card">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input id="name" class="form-input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" class="form-input" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">{{ __('Phone') }}</label>
                    <input id="phone" class="form-input" type="number" name="phone" :value="old('phone')" required />
                </div>

                <div class="form-group">
                    <label for="adress" class="form-label">{{ __('Address') }}</label>
                    <input id="adress" class="form-input" type="text" name="adress" :value="old('adress')" required />
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" class="form-input" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" class="form-input" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="form-group">
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

                <div class="form-actions">
                    <a class="forgot-password" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button class="submit-btn">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </div>

    <!-- Inline CSS -->
    <style>
        /* Container for the registration form */
        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f7f7;
        }

        /* Card style for the form */
        .register-card {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Form group styles */
        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 6px;
            color: #333;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            transition: border-color 0.3s ease;
        }

        .form-input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .forgot-password {
            text-decoration: none;
            font-size: 14px;
            color: #007bff;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #0056b3;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }

        /* Responsive design */
        @media (max-width: 600px) {
            .register-card {
                padding: 30px;
            }

            .form-input {
                font-size: 16px;
            }

            .submit-btn {
                font-size: 18px;
            }
        }
    </style>
</x-guest-layout>
