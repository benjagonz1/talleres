<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <div class="w-full max-w-xl bg-white rounded-2xl shadow-lg p-10">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Registrate</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nombre -->
            <div class="mb-5">
                <label class="block mb-1 font-semibold text-gray-700">Nombre</label>
                <input type="text" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>

            <!-- Email -->
            <div class="mb-5">
                <label class="block mb-1 font-semibold text-gray-700">Correo electrónico</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>

            <!-- Contraseña -->
            <div class="mb-5 relative">
                <label class="block mb-1 font-semibold text-gray-700">Contraseña</label>
                <input type="password" id="password" name="password"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 @error('password') border-red-500 @enderror"
                required>
                <span onclick="togglePassword('password')"
                class="absolute right-3 top-9 cursor-pointer text-gray-600 hover:text-green-600 text-lg">👁</span>
                @error('password')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>


            <!-- Confirmar contraseña -->
            <div class="mb-5 relative">
                <label class="block mb-1 font-semibold text-gray-700">Confirmar contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" required>
                <span onclick="togglePassword('password_confirmation')" class="absolute right-3 top-9 cursor-pointer text-gray-600 hover:text-green-600 text-lg">👁</span>

                @error('password_confirmation')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Recordar -->
            <div class="flex items-center mb-5">
                <input type="checkbox" name="remember" class="mr-2">
                <label class="text-sm text-gray-700">Recordar contraseña</label>
            </div>

            <!-- Botón -->
            <button type="submit"
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-lg">
                Registrarse
            </button>

            <!-- Enlace a login -->
            <div class="text-center mt-6">
                <span class="text-sm text-gray-600">¿Ya tenés una cuenta?</span>
                <a href="{{ route('login') }}" class="text-green-600 hover:underline ml-1">Iniciar sesión</a>
            </div>
        </form>
    </div>
</div>

<script>
    function togglePassword(id) {
        const input = document.getElementById(id);
        input.type = input.type === "password" ? "text" : "password";
    }
</script>