<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>
    <style>
        #tsparticles {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center bg-gray-900 text-white relative">

    <div id="tsparticles"></div>

    <div class="flex w-full max-w-5xl bg-white rounded-2xl shadow-xl overflow-hidden">
        <!-- Ilustrasi -->
        <div class="w-1/2 bg-blue-600 flex items-center justify-center p-6">
            <img src="/images/login.jpg" alt="Login Illustration" class="w-full h-auto object-contain rounded-lg">
        </div>


        <!-- Form Login -->
        <div class="w-1/2 p-10 text-gray-900">
            <h2 class="text-3xl font-bold mb-6 text-center">Login</h2>

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ url('/login') }}" class="space-y-5">
                @csrf
                <div>
                    <label class="block font-semibold mb-1">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block font-semibold mb-1">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-200">
                    Login
                </button>
            </form>
        </div>
    </div>

    <script>
        tsParticles.load("tsparticles", {
            fullScreen: { enable: false },
            background: { color: "#1a202c" },
            particles: {
                number: { value: 60, density: { enable: true, value_area: 800 } },
                color: { value: "#ffffff" },
                shape: { type: "circle" },
                opacity: { value: 0.5 },
                size: { value: 3 },
                move: {
                    enable: true,
                    speed: 1,
                    direction: "none",
                    outModes: { default: "bounce" }
                }
            },
            interactivity: {
                events: {
                    onHover: { enable: true, mode: "repulse" },
                    onClick: { enable: true, mode: "push" }
                },
                modes: {
                    repulse: { distance: 100 },
                    push: { quantity: 4 }
                }
            }
        });
    </script>
</body>

</html>