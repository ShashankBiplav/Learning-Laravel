<div>
    @if(session()->has('message'))
        <div class="alert alert-success text-center">{{session()->get('message')}}</div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger text-center">{{session()->get('error')}}</div>
    @endif
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-center list-group-item list-group-item-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
