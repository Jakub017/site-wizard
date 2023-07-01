@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    <button type="button" class="alert-close" data-dismiss="alert">×</button>
    {{ session('success') }}
</div>
@endif

@if (Session::has('error'))
<div class="alert alert-error" role="alert">
    <button type="button" class="alert-close" data-dismiss="alert">×</button>
    {{ session('error') }}
</div>
@endif
