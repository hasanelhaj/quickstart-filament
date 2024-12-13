<div>
    <div class="cube-container" wire:click="redirectToAuth('login')">
        <img src="{{ asset('rubiks-cube-solve.gif') }}" alt="Rubik's Cube Solving Animation">
    </div>

    <div class="auth-buttons">
        <a href="{{ route('register') }}">Sign Up</a>
        <a href="{{ route('login') }}">Log In</a>
    </div>
</div>