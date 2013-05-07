# Invi Bundle for Laravel #

This bundle help you to make a simple invitation system for you signup or other service.
[http://bundles.laravel.com/bundle/Invi]

## Features ##
- Generate invitation code with email.
- Set expiration date
- Active or deactive invite
- Use it,unsed it or delete it


## Examples ##


```php
Invi::forge()->generate("example@domain.com","2 day",True); // Generate Invitation

if(Invi::forge()->check("f22c597305eb1800","example@domain.com"))
	Invi::forge()->used("f22c597305eb1800","example@domain.com");
else
	echo Invi::forge()->status("f22c597305eb1800","example@domain.com");
```


## Functions ##

- generate
<br>
Arguments:
	- email
	- expiration date : 2 year 2 month 13 day 1 hour 23 min 40 sec
	- active
<br>
Return:
	A jSon array of all invitation information

- check
validate invitation code
<br>
Argouments:
	- invitation code
	- email
<br>
Return:
	Boolean
- status
return invitation code status
<br>
Argouments:
	- invitation code
	- email
<br>
Return:
	Status :  Active,Deactive,Used,Valid,Not Exist
- active
activate an invitation
<br>
Argouments:
	- invitation code
	- email
- deactive
deactivate an invitation
<br>Argouments:
	- invitation code
	- email
- used
make an invitation used
<br>Argouments:
	- invitation code
	- email
- unused
make an invitation unused
<br>Argouments:
	- invitation code
	- email
- delete
delete an invitation
<br>Argouments:
	- invitation code
	- email


## License ##

The MIT License (MIT)

Copyright (c) 2013 Sajjad Rad

http://sajjadrad.com
https://github.com/sajjadrad/laravel-Invi

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS
OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN
AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

http://opensource.org/licenses/MIT
