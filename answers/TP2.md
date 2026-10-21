# TP2 answers

Question 1:

- No the names are different each time (first Edmond Alice Joshua then Jamir Vincent Jovan)
- The factory uses fake() which picks random names
- migrate:fresh deletes everything and the seeder creates 8 new random tickets
  
Question 2:

- I get 404 Not Found
- Laravel looked for the ticket by itself (model binding) because of Ticket $ticket in show()
- Ticket 999 does not exist so Laravel answers 404

Question 3:

- I get 404 Not Found
- Laravel reads routes from top to bottom
- /tickets/create matches /tickets/{ticket} first, so it looks for a ticket called "create" and finds nothing