@extends('layouts.app')
@section('title', $ticket->name)
@section('content')

<h1>{{ $ticket->name }}</h1>

<p><span class="topic">{{ $ticket->topic }}</span> · {{ $ticket->status }}</p>

<p>{{ $ticket->description ?? 'No description.' }}</p>

<p>Asked {{ $ticket->created_at->diffForHumans() }}</p>

@if ($ticket->status === 'waiting')
<p><strong>{{ $ahead }}</strong> {{ $ahead === 1 ? 'person' : 'people' }} ahead of you.</p>
@endif

@if ($ticket->status !== 'done')
<form method="POST" action="{{ route('tickets.update', $ticket) }}">
    @csrf
    @method('PATCH')
    <input type="hidden" name="status" value="{{ $ticket->status === 'waiting' ? 'helping' : 'done' }}">
    <button type="submit">{{ $ticket->status === 'waiting' ? 'Start helping' : 'Mark as done' }}</button>
</form>
@endif

<form method="POST" action="{{ route('tickets.destroy', $ticket) }}" onsubmit="return confirm('Remove this ticket?')">

    @csrf

    @method('DELETE')

    <button type="submit">Remove</button>

</form>

<p><a href="{{ route('tickets.index') }}">← Back to the queue</a></p>
@endsection