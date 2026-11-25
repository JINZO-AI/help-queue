<article class="ticket">
    <strong>{{ isset($position) ? $position . '. ' : '' }}{{ $ticket->name }}</strong>
    <a class="topic" href="{{ route('topics.show', $ticket->topic) }}">{{ $ticket->topic->name }}</a>
    <p>{{ $ticket->description }}</p>
    <a href="{{ route('tickets.show', $ticket) }}">Details</a>
</article>