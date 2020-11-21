<div>
    @if(session()->has('message'))
        <div class="alert alert-success text-center">{{session()->get('message')}}</div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger text-center">{{session()->get('error')}}</div>
    @endif

</div>
