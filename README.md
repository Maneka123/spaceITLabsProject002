# spaceITLabsProject002
this is a project made from vuejs and Laravel

user can login to the system.If the username and password is stored in the database the user can successfully login.If not an error is displayed.The password is stored as a hash in the database table.There are  tables users,cart,borrowed books and books.After the user logins he can see the trending books on the page.from there he can add preferred books to cart.He can also remove books from the cart.If he removes the database table will also get updated.After adding to cart he can borrow books.When he clicks borrow book his cart will be emptied and data will be added to borrowed_books table.If he wish he can undo the borrowing as well.I he does undo,then the details in borrowed_books table will be deleted.If user clicks logout ,he will land on login page. In order to carry out activities further he need to login with a valid email and password.User can search books according to description,genre and title.I attempted to put pagination in the page that shows "Trending books".But since it did not work perfectly i  commented out the code that makes pagination in "ProductController" and instead  showed all books due to issues in time.The name of the user in the session is displayed on the top.If logged out no name will be shown.

Login details : peterparker@gmail.com
password=12345
