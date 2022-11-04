@extends('layouts.layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <h1><b>Pizza List</b></h1>

    @foreach($pizza as $expizza)
        <div>
            {{$expizza->name}} - {{ $expizza->type}} - {{ $expizza->base}}
        </div>
    @endforeach
</div>  
@endsection

 