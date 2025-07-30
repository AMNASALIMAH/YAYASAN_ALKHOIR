{{-- Sidebar --}}
<aside class="w-56 bg-blue-950 text-white flex flex-col p-4">
    {{-- Logo --}}
    <div class="flex items-center space-x-3 mb-6">

        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="h-10 w-10 rounded" />
        <a href="{{ url('/') }}">
            <span class="text-base font-bold leading-tight">
                YAYASAN<br>AL-KHOIR
            </span>
        </a>
    </div>

    {{-- Sidebar Menu --}}
    <nav class="mt-4 space-y-2">
        <a href="{{ route('dashboard') }}" class="block text-white hover:text-gray-200">Dashboard</a>

    </nav>
</aside>
