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