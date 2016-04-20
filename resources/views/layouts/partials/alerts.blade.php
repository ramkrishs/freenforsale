@if(Session::has('info'))
    <div class="alert alert-info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        <strong>{{Session::get('info')}}</strong>
    </div>
@endif
@if(Session::has('danger'))
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
        <strong>{{Session::get('danger')}}</strong>
    </div>
@endif