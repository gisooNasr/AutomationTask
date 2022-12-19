<!doctype html>
<html lang="en">
@include('layouts.blocks.head')
<body>
<div>
    @include('layouts.blocks.navbar')
    <div id="main" style="background-color: rgba(255,255,255,0.73)">
        @include('layouts.blocks.sidebar')
        <main class="main-content">
            @yield('content')
        </main>
    </div>
    @include('layouts.blocks.script')
    @yield('js')
</div>
@include('layouts.blocks.toast')
</body>

</html>
