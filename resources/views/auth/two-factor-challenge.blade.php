<x-guest-layout>
    <x-auth-card>
        <div>
            <p>Enter your Two-Factor Authentication Code:</p>
            <form method="POST" action="{{ url('/two-factor-challenge') }}">
                @csrf
                <input type="text" name="code" required autofocus>
                <button type="submit">Verify</button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
