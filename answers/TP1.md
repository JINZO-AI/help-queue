# TP1 exit questions

## 1. Which files does /tickets go through, in order?
- routes/web.php: the route /tickets
- TicketController.php: index() calls Ticket::orderBy(...)->get()
- Ticket.php: the model
- database: the tickets table
- tickets/index.blade.php (it extends layouts/app.blade.php)
- the HTML goes back to the browser

## 2. What does a migration do, and why is it better than creating the table by hand?
- It creates the table from code (php artisan migrate)
- It is saved in Git, so everyone gets the same table
- It can be undone with migrate:rollback

## 3. Why did Ticket::create(...) fail before $fillable?
- create() is mass assignment
- Laravel blocks fields that are not in $fillable
- Ticket had no $fillable, so MassAssignmentException
- Fix: add name, topic, description to $fillable