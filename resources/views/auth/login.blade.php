<x-guest-layout>
    <div class="login-container">
        <div class="login-card">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="form-group remember-me">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" class="form-checkbox" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="form-actions">
                    @if (Route::has('password.request'))
                        <a class="forgot-password" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button type="submit" class="submit-btn">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Inline CSS -->
    <style>
        /* Container for the login form */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        /* Card style for the form */
        .login-card {
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

        .remember-me {
            display: flex;
            align-items: center;
        }

        /* Styling for the submit button */
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

        /* Forgot password link */
        .forgot-password {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            font-size: 14px;
            color: #007bff;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #0056b3;
        }

        /* Responsive design */
        @media (max-width: 600px) {
            .login-card {
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
