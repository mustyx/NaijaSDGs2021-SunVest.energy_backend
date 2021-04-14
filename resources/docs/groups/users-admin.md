# Users - ADMIN

Manage users

## GET Users


List all users with extra details

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/dashboard/admin/users?page=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/admin/users"
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
<div id="execution-results-GETdashboard-admin-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdashboard-admin-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdashboard-admin-users"></code></pre>
</div>
<div id="execution-error-GETdashboard-admin-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdashboard-admin-users"></code></pre>
</div>
<form id="form-GETdashboard-admin-users" data-method="GET" data-path="dashboard/admin/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdashboard-admin-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdashboard-admin-users" onclick="tryItOut('GETdashboard-admin-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdashboard-admin-users" onclick="cancelTryOut('GETdashboard-admin-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdashboard-admin-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>dashboard/admin/users</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETdashboard-admin-users" data-component="query"  hidden>
<br>
Which page to show.</p>
</form>


## POST User


Create a new user

> Example request:

```bash
curl -X POST \
    "https://api.sunvest.test/dashboard/admin/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"firstName":"\"Damilare\"","lastName":"\"Abi\"","email":"\"test@test.com\"","phone":"\"Abi\"","password":"\"123456\"","password_confirmation":"\"123456\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/admin/users"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-POSTdashboard-admin-users" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTdashboard-admin-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTdashboard-admin-users"></code></pre>
</div>
<div id="execution-error-POSTdashboard-admin-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTdashboard-admin-users"></code></pre>
</div>
<form id="form-POSTdashboard-admin-users" data-method="POST" data-path="dashboard/admin/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTdashboard-admin-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTdashboard-admin-users" onclick="tryItOut('POSTdashboard-admin-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTdashboard-admin-users" onclick="cancelTryOut('POSTdashboard-admin-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTdashboard-admin-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>dashboard/admin/users</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>firstName</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="firstName" data-endpoint="POSTdashboard-admin-users" data-component="body" required  hidden>
<br>
Firstname of user.</p>
<p>
<b><code>lastName</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="lastName" data-endpoint="POSTdashboard-admin-users" data-component="body" required  hidden>
<br>
Surname/Last name of user.</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>email</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTdashboard-admin-users" data-component="body" required  hidden>
<br>
Email address of user.</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>numeric</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="POSTdashboard-admin-users" data-component="body"  hidden>
<br>
Phone number of user.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTdashboard-admin-users" data-component="body" required  hidden>
<br>
min:6 Account password.</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password_confirmation" data-endpoint="POSTdashboard-admin-users" data-component="body" required  hidden>
<br>
min:6 Retype account password.</p>

</form>


## GET User


Get information on a single user

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/dashboard/admin/users/sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/admin/users/sed"
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
<div id="execution-results-GETdashboard-admin-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdashboard-admin-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdashboard-admin-users--user-"></code></pre>
</div>
<div id="execution-error-GETdashboard-admin-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdashboard-admin-users--user-"></code></pre>
</div>
<form id="form-GETdashboard-admin-users--user-" data-method="GET" data-path="dashboard/admin/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdashboard-admin-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdashboard-admin-users--user-" onclick="tryItOut('GETdashboard-admin-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdashboard-admin-users--user-" onclick="cancelTryOut('GETdashboard-admin-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdashboard-admin-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>dashboard/admin/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETdashboard-admin-users--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## PUT User


Update user data. This should be a POST request

> Example request:

```bash
curl -X PUT \
    "https://api.sunvest.test/dashboard/admin/users/totam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"firstName":"\"Damilare\"","lastName":"\"Abi\"","phone":"\"Abi\"","update_type":"\"profile\"","_method":"\"PUT\"","current_password":"\"123456\"","password":"\"123456\"","password_confirmation":"\"123456\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/admin/users/totam"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-PUTdashboard-admin-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTdashboard-admin-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTdashboard-admin-users--user-"></code></pre>
</div>
<div id="execution-error-PUTdashboard-admin-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTdashboard-admin-users--user-"></code></pre>
</div>
<form id="form-PUTdashboard-admin-users--user-" data-method="PUT" data-path="dashboard/admin/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTdashboard-admin-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTdashboard-admin-users--user-" onclick="tryItOut('PUTdashboard-admin-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTdashboard-admin-users--user-" onclick="cancelTryOut('PUTdashboard-admin-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTdashboard-admin-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>dashboard/admin/users/{user}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>dashboard/admin/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="PUTdashboard-admin-users--user-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>firstName</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="firstName" data-endpoint="PUTdashboard-admin-users--user-" data-component="body"  hidden>
<br>
Firstname of user.</p>
<p>
<b><code>lastName</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="lastName" data-endpoint="PUTdashboard-admin-users--user-" data-component="body"  hidden>
<br>
Surname/Last name of user.</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>numeric</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="PUTdashboard-admin-users--user-" data-component="body"  hidden>
<br>
Phone number of user.</p>
<p>
<b><code>update_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="update_type" data-endpoint="PUTdashboard-admin-users--user-" data-component="body" required  hidden>
<br>
in:profile,password What type of update whether for profile data or password.</p>
<p>
<b><code>_method</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="_method" data-endpoint="PUTdashboard-admin-users--user-" data-component="body" required  hidden>
<br>
This will tell backend to see it as an update request.</p>
<p>
<b><code>current_password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="current_password" data-endpoint="PUTdashboard-admin-users--user-" data-component="body"  hidden>
<br>
min:6 Account password.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="password" data-endpoint="PUTdashboard-admin-users--user-" data-component="body"  hidden>
<br>
min:6 Account password.</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="password_confirmation" data-endpoint="PUTdashboard-admin-users--user-" data-component="body"  hidden>
<br>
min:6 Retype account password.</p>

</form>


## DELETE User


Soft delete a user. This should be a POST request

> Example request:

```bash
curl -X DELETE \
    "https://api.sunvest.test/dashboard/admin/users/ratione" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"_method":"\"DELETE\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/admin/users/ratione"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-DELETEdashboard-admin-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEdashboard-admin-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEdashboard-admin-users--user-"></code></pre>
</div>
<div id="execution-error-DELETEdashboard-admin-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEdashboard-admin-users--user-"></code></pre>
</div>
<form id="form-DELETEdashboard-admin-users--user-" data-method="DELETE" data-path="dashboard/admin/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEdashboard-admin-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEdashboard-admin-users--user-" onclick="tryItOut('DELETEdashboard-admin-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEdashboard-admin-users--user-" onclick="cancelTryOut('DELETEdashboard-admin-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEdashboard-admin-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>dashboard/admin/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="DELETEdashboard-admin-users--user-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>_method</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="_method" data-endpoint="DELETEdashboard-admin-users--user-" data-component="body" required  hidden>
<br>
This will tell backend that its actually a delete request.</p>

</form>



