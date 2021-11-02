@if (Session::has('success'))
    <span
        id="alert"
        class="alert lifestyle position-fixed top-0 end-0 m-3"
        role="alert"
    >
        {{Session::get('success')}}
    </span>
@elseif (Session::has('warning'))
    <span
    id="alert"
    class="alert btn-bg-5 position-fixed top-0 end-0 m-3"
    role="alert"
    >
    {{Session::get('warning')}}
    </span>
@endif
