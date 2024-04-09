<head>
    @livewireStyles
    <script src="{{ asset('vendor/livewire/livewire.js') }}" defer></script>
</head>
<body>
    {{ $slot }}
 
    @livewireScripts
</body>