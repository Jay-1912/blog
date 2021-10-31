@if (Session::has('success'))
    <span
        id="alert"
        class="alert lifestyle position-fixed top-0 end-0 m-3"
        role="alert"
    >
        {{Session::get('success')}}
    </span>
@endif
