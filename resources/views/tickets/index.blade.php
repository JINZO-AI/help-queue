@extends('layouts.app')
@section('title', 'Queue')
@section('content')

<h1>Help queue</h1>

<p>

    <a href="{{ route('tickets.index') }}">All</a>

    @foreach ($topics as $topic)

    | <a href="{{ route('tickets.index', ['topic' => $topic]) }}">{{ $topic }}</a>

    @endforeach

</p>

<p>{{ $tickets->count() }} waiting</p>

@forelse ($tickets as $ticket)

<article class="ticket">

    <strong>{{ $loop->iteration }}. <a href="/tickets/{{ $ticket->id }}">{{ $ticket->name }}</a></strong>

    <span class="topic">{{ $ticket->topic }}</span>

    <p>{{ $ticket->description }}</p>

    <a href="{{ route('tickets.show', $ticket) }}">Details</a>

</article>

@empty

<p>Nobody is waiting.</p>

@endforelse
@endsection