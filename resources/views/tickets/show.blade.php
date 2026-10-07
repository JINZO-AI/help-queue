@extends('layouts.app')

@section('title', 'Ticket')

@section('content')
<h1>{{ $ticket->name }}</h1>
<p><span class="topic">{{ $ticket->topic }}</span></p>
<p>{{ $ticket->description }}</p>
<p>Created {{ $ticket->created_at->diffForHumans() }}</p>
<p><a href="/tickets">Back to the queue</a></p>
@endsection