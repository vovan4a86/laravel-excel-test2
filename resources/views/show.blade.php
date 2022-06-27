@extends('layouts.app')

@section('title', 'Show page')

@section('content')
    <div class="my-5">
        @foreach($rows as $row => $data)
            <div>
                <span class="small text-black text-opacity-25">{{ $loop->iteration }}.</span>
                <span class="fw-bold">{{ $row }} => </span>
                    @foreach($data as $key => $value)
                        @if($loop->first)
                        <span>["{{ $key }}": "{{ $value }}", </span>
                        @endif
                        @if($loop->last)
                        <span>"{{ $key }}": "{{ $value }}"]</span>
                        @endif
                    @endforeach
            </div>
        @endforeach
    </div>
@endsection
