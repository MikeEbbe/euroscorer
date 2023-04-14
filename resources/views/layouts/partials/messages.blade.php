@if(isset ($errors) && count($errors) > 0)
<div class="text-red-500">
    <ul class="list-none">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(Session::get('success', false))
<?php $data = Illuminate\Support\Facades\Session::get('success'); ?>
@if (is_array($data))
@foreach ($data as $msg)
<div class="text-red-500">
    {{ $msg }}
</div>
@endforeach
@else
<div class="text-red-500">
    {{ $data }}
</div>
@endif
@endif