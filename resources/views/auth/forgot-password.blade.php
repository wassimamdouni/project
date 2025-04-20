<x-guest-layout>
    <div class="forgot-password-container">
        <div class="forgot-password-card">
            <div class="instruction-text">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            @if (session('status'))
                <div class="status-message">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="form-actions">
                    <x-jet-button class="submit-btn">
                        {{ __('Email Password Reset Link') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </div>

    <!-- Inline CSS -->
    <style>
        /* Import Google Font for modern text */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        /* Apply the font family globally */
        body {
            font-family: 'Roboto', sans-serif;
        }

        /* Container for the forgot password form */
        .forgot-password-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f7f7;
        }

        /* Card style for the form */
        .forgot-password-card {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        /* Instruction text with new font-family */
        .instruction-text {
            margin-bottom: 20px;
            font-size: 14px;
            font-family: 'Poppins', sans-serif; /* Modern font applied here */
            color: #555;
        }

        /* Status message */
        .status-message {
            margin-bottom: 20px;
            font-size: 14px;
            color: #4CAF50;
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

        /* Responsive design */
        @media (max-width: 600px) {
            .forgot-password-card {
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
