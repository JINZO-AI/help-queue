# TP3 answers

Question 1:

- The page came back and nothing changed, the ticket is still waiting
- The message is "The selected status is invalid."
- The rule Rule::in(Ticket::STATUSES) accepts only waiting, helping or done, so sleeping is refused by the server

Question 2:

- select * from "tickets" where "status" = ? order by "id" asc
- The scope adds the where on status and the order by id
- The ? is replaced by the value waiting

Question 3:

- 6 people are ahead of me
- It is correct: I counted 6 tickets above mine in the Waiting section (I am number 7)
- The controller counts the waiting tickets with an id smaller than mine

Question 4:

- The badges show JSON like {"id":4,"name":"Database","created_at":...}
- $ticket->topic is now the relationship, so it gives the whole Topic object and Blade prints it as JSON
- To show only the name I must write $ticket->topic->name

Question 5:

- I get "The selected topic id is invalid."
- The rule is 'topic_id' => ['required', 'exists:topics,id'] in store()
- There is no topic with id 99 in the topics table, so the server refuses it

Question 6:

- I clicked Laravel and the page shows 3 tickets (Sven, Forest, Barney)
- It matches the queue page, where 3 tickets have the Laravel badge
- The page gets them with $topic->tickets(), the relationship from Topic to its tickets
  
  Question 7:

- The list contains 10 items, the same as the 10 waiting tickets
- The topic object has 4 fields: id, name, created_at, updated_at
- A mobile app, a Python script, or a tool like Postman or curl could use this data
  
  Question 8:

- No, my neighbour's project did not start: I get 404 Not Found on every page
- Their routes/web.php file contains the code of TicketController instead of the routes, so the app has no routes
- Their README also has no installation steps (it is still the default Laravel README), the steps clone, composer install, npm install, cp .env.example .env, key:generate, migrate --seed and composer run dev are missing