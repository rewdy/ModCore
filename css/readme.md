About ModCore less setup
========================

I recently added in lessphp (http://leafo.net/lessphp/) to compile the .less files. This is much easier for me than having a compiler running in the background or having a javascript compiler run in the browser.

To use, just link to the style.css.php file instead of style.css. The headers are set in the style.css.php file so that your browser should interpret it correctly without trouble.

If you would prefer to use a compiler (or if you cannot use php): fire up your compiler, have it create a style.css, and use that file instead.

Enjoy.
