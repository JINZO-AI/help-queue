<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(Request $request)
    {
        $topic = $request->query('topic');

        $query = Ticket::orderBy('created_at');

        if ($topic) {
            $query->where('topic', $topic);
        }

        return view('tickets.index', [
            'tickets' => $query->get(),
            'topics' => Ticket::TOPICS,
            'currentTopic' => $topic,
        ]);
    }

    public function show(Ticket $ticket)
    {
        return view('tickets.show', ['ticket' => $ticket]);
    }

    public function create()
    {
        return view('tickets.create', ['topics' => Ticket::TOPICS]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'topic' => ['required', Rule::in(Ticket::TOPICS)],
            'description' => ['nullable', 'string', 'max:500'],
        ]);

        Ticket::create($validated);

        return redirect()->route('tickets.index')->with('message', 'You are in the queue!');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return redirect()->route('tickets.index')->with('message', 'Ticket removed.');
    }
}
