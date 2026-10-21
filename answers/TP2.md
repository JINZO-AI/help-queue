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
  
Question 4:

- Without @csrf I get 419 Page Expired (I saw it with curl, because the browser form still worked in this Laravel version)
- The token protects against CSRF attacks: another website sending a form to my site in my name, using my session

Question 5:

- The name I typed is still in the box
- The part of the view responsible is value="{{ old('name') }}" in the name input

Question 6:

- Because the browser can be changed by the user (developer tools), so anyone can send any value
- The server must check the data again: here Rule::in refused Cooking