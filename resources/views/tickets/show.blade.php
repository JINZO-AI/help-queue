@extends('layouts.app')
@section('title', $ticket->name)
@section('content')

<h1>{{ $ticket->name }}</h1>

<p><span class="topic">{{ $ticket->topic }}</span> · {{ $ticket->status }}</p>

<p>{{ $ticket->description ?? 'No description.' }}</p>

<p>Asked {{ $ticket->created_at->diffForHumans() }}</p>

<form method="POST" action="{{ route('tickets.destroy', $ticket) }}" onsubmit="return confirm('Remove this ticket?')">

    @csrf

    @method('DELETE')

    <button type="submit">Remove</button>

</form>

<p><a href="{{ route('tickets.index') }}">← Back to the queue</a></p>
@endsection