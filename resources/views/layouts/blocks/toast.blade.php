
@if(Session::has('success'))
    <script>
        var msg = "{!!Session::get('success')!!}";
        Command: toastr["success"](msg, "موفق")
    </script>
@endif

@if(Session::has('info'))
    <script>
        var msg = "{!!Session::get('info')!!}";
        Command: toastr["info"](msg, "اطلاعیه")
    </script>
@endif

@if(Session::has('warning'))
    <script>
        var msg = "{!!Session::get('warning')!!}";
        Command: toastr["warning"](msg, "هشدار")
    </script>
@endif

@if(Session::has('error'))
    <script>
        var msg = "{!!Session::get('error')!!}";
        Command: toastr["error"](msg, "خطا")
    </script>
@endif

@if(isset($errors))
    @if($errors->any() || Session::has('error'))

        @if(Session::has('error'))
            <script>
                var msg = " {!!Session::get('error')!!}";
                Command: toastr["error"](msg, "خطا")

            </script>
        @endif
        @if(isset($errors))
            @foreach($errors->all() as $error )
                <script>
                    var msg = "{!! $error !!}";
                    Command: toastr["error"](msg, "خطا")

                </script>
            @endforeach
        @endif
    @endif
@endif


