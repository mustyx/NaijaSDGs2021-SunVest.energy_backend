# Users - ADMIN

Manage users

## GET Users


List all users with extra details

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/admin/users?page=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/admin/users"
);

let params = {
    "page": "3",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-users"></code></pre>
</div>
<div id="execution-error-GETadmin-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-users"></code></pre>
</div>
<form id="form-GETadmin-users" data-method="GET" data-path="admin/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-users" onclick="tryItOut('GETadmin-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-users" onclick="cancelTryOut('GETadmin-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/users</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETadmin-users" data-component="query"  hidden>
<br>
Which page to show.</p>
</form>


## POST User


Create a new user

> Example request:

```bash
curl -X POST \
    "https://api.sunvest.test/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"firstName":"\"Damilare\"","lastName":"\"Abi\"","email":"\"test@test.com\"","phone":"\"Abi\"","password":"\"123456\"","password_confirmation":"\"123456\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/admin/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "firstName": "\"Damilare\"",
    "lastName": "\"Abi\"",
    "email": "\"test@test.com\"",
    "phone": "\"Abi\"",
    "password": "\"123456\"",
    "password_confirmation": "\"123456\""
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-users" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-users"></code></pre>
</div>
<div id="execution-error-POSTadmin-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-users"></code></pre>
</div>
<form id="form-POSTadmin-users" data-method="POST" data-path="admin/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-users" onclick="tryItOut('POSTadmin-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-users" onclick="cancelTryOut('POSTadmin-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/users</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>firstName</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="firstName" data-endpoint="POSTadmin-users" data-component="body" required  hidden>
<br>
Firstname of user.</p>
<p>
<b><code>lastName</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="lastName" data-endpoint="POSTadmin-users" data-component="body" required  hidden>
<br>
Surname/Last name of user.</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>email</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTadmin-users" data-component="body" required  hidden>
<br>
Email address of user.</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>numeric</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="POSTadmin-users" data-component="body"  hidden>
<br>
Phone number of user.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTadmin-users" data-component="body" required  hidden>
<br>
min:6 Account password.</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password_confirmation" data-endpoint="POSTadmin-users" data-component="body" required  hidden>
<br>
min:6 Retype account password.</p>

</form>


## GET User


Get information on a single user

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/admin/users/praesentium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/admin/users/praesentium"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETadmin-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-users--user-"></code></pre>
</div>
<div id="execution-error-GETadmin-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-users--user-"></code></pre>
</div>
<form id="form-GETadmin-users--user-" data-method="GET" data-path="admin/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-users--user-" onclick="tryItOut('GETadmin-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-users--user-" onclick="cancelTryOut('GETadmin-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETadmin-users--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## PUT User


Update user data. This should be a POST request

> Example request:

```bash
curl -X PUT \
    "https://api.sunvest.test/admin/users/adipisci" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"firstName":"\"Damilare\"","lastName":"\"Abi\"","phone":"\"Abi\"","update_type":"\"profile\"","_method":"\"PUT\"","current_password":"\"123456\"","password":"\"123456\"","password_confirmation":"\"123456\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/admin/users/adipisci"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "firstName": "\"Damilare\"",
    "lastName": "\"Abi\"",
    "phone": "\"Abi\"",
    "update_type": "\"profile\"",
    "_method": "\"PUT\"",
    "current_password": "\"123456\"",
    "password": "\"123456\"",
    "password_confirmation": "\"123456\""
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-users--user-"></code></pre>
</div>
<div id="execution-error-PUTadmin-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-users--user-"></code></pre>
</div>
<form id="form-PUTadmin-users--user-" data-method="PUT" data-path="admin/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-users--user-" onclick="tryItOut('PUTadmin-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-users--user-" onclick="cancelTryOut('PUTadmin-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/users/{user}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>admin/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="PUTadmin-users--user-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>firstName</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="firstName" data-endpoint="PUTadmin-users--user-" data-component="body"  hidden>
<br>
Firstname of user.</p>
<p>
<b><code>lastName</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="lastName" data-endpoint="PUTadmin-users--user-" data-component="body"  hidden>
<br>
Surname/Last name of user.</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>numeric</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="PUTadmin-users--user-" data-component="body"  hidden>
<br>
Phone number of user.</p>
<p>
<b><code>update_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="update_type" data-endpoint="PUTadmin-users--user-" data-component="body" required  hidden>
<br>
in:profile,password What type of update whether for profile data or password.</p>
<p>
<b><code>_method</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="_method" data-endpoint="PUTadmin-users--user-" data-component="body" required  hidden>
<br>
This will tell backend to see it as an update request.</p>
<p>
<b><code>current_password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="current_password" data-endpoint="PUTadmin-users--user-" data-component="body"  hidden>
<br>
min:6 Account password.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="password" data-endpoint="PUTadmin-users--user-" data-component="body"  hidden>
<br>
min:6 Account password.</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="password_confirmation" data-endpoint="PUTadmin-users--user-" data-component="body"  hidden>
<br>
min:6 Retype account password.</p>

</form>


## DELETE User


Soft delete a user. This should be a POST request

> Example request:

```bash
curl -X DELETE \
    "https://api.sunvest.test/admin/users/sapiente" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"_method":"\"DELETE\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/admin/users/sapiente"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "_method": "\"DELETE\""
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-DELETEadmin-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-users--user-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-users--user-"></code></pre>
</div>
<form id="form-DELETEadmin-users--user-" data-method="DELETE" data-path="admin/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-users--user-" onclick="tryItOut('DELETEadmin-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-users--user-" onclick="cancelTryOut('DELETEadmin-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="DELETEadmin-users--user-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>_method</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="_method" data-endpoint="DELETEadmin-users--user-" data-component="body" required  hidden>
<br>
This will tell backend that its actually a delete request.</p>

</form>



