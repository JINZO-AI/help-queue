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