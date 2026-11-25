<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('tickets.index', [
            'helping' => Ticket::helping()->get(),
            'waiting' => Ticket::waiting()->get(),
            'doneCount' => Ticket::where('status', 'done')->count(),
        ]);
    }

    public function show(Ticket $ticket)
    {
        $ahead = Ticket::waiting()->where('id', '<', $ticket->id)->count();
        return view('tickets.show', ['ticket' => $ticket, 'ahead' => $ahead]);
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

    public function update(Request $request, Ticket $ticket)
    {
        $validated = $request->validate([
            'status' => ['required', Rule::in(Ticket::STATUSES)],
        ]);
        $ticket->status = $validated['status'];
        $ticket->save();
        return redirect()->route('tickets.show', $ticket)->with('message', 'Status updated.');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return redirect()->route('tickets.index')->with('message', 'Ticket removed.');
    }
}
