# Users

Manage user

## GET User


List all users with extra details

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/dashboard/users?page=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/users"
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
<div id="execution-results-GETdashboard-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdashboard-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdashboard-users"></code></pre>
</div>
<div id="execution-error-GETdashboard-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdashboard-users"></code></pre>
</div>
<form id="form-GETdashboard-users" data-method="GET" data-path="dashboard/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdashboard-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdashboard-users" onclick="tryItOut('GETdashboard-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdashboard-users" onclick="cancelTryOut('GETdashboard-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdashboard-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>dashboard/users</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETdashboard-users" data-component="query"  hidden>
<br>
Which page to show.</p>
</form>


## GET Full User data


Get information on a single user

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/dashboard/users/illum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/users/illum"
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
<div id="execution-results-GETdashboard-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdashboard-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdashboard-users--user-"></code></pre>
</div>
<div id="execution-error-GETdashboard-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdashboard-users--user-"></code></pre>
</div>
<form id="form-GETdashboard-users--user-" data-method="GET" data-path="dashboard/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdashboard-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdashboard-users--user-" onclick="tryItOut('GETdashboard-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdashboard-users--user-" onclick="cancelTryOut('GETdashboard-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdashboard-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>dashboard/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETdashboard-users--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## PUT User


Update user data. This should be a POST request

> Example request:

```bash
curl -X PUT \
    "https://api.sunvest.test/dashboard/users/maiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"firstName":"\"Damilare\"","lastName":"\"Abi\"","phone":"\"Abi\"","update_type":"\"profile\"","_method":"\"PUT\"","current_password":"\"123456\"","password":"\"123456\"","password_confirmation":"\"123456\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/users/maiores"
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
<div id="execution-results-PUTdashboard-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTdashboard-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTdashboard-users--user-"></code></pre>
</div>
<div id="execution-error-PUTdashboard-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTdashboard-users--user-"></code></pre>
</div>
<form id="form-PUTdashboard-users--user-" data-method="PUT" data-path="dashboard/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTdashboard-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTdashboard-users--user-" onclick="tryItOut('PUTdashboard-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTdashboard-users--user-" onclick="cancelTryOut('PUTdashboard-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTdashboard-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>dashboard/users/{user}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>dashboard/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="PUTdashboard-users--user-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>firstName</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="firstName" data-endpoint="PUTdashboard-users--user-" data-component="body"  hidden>
<br>
Firstname of user.</p>
<p>
<b><code>lastName</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="lastName" data-endpoint="PUTdashboard-users--user-" data-component="body"  hidden>
<br>
Surname/Last name of user.</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>numeric</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="PUTdashboard-users--user-" data-component="body"  hidden>
<br>
Phone number of user.</p>
<p>
<b><code>update_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="update_type" data-endpoint="PUTdashboard-users--user-" data-component="body" required  hidden>
<br>
in:profile,password What type of update whether for profile data or password.</p>
<p>
<b><code>_method</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="_method" data-endpoint="PUTdashboard-users--user-" data-component="body" required  hidden>
<br>
This will tell backend to see it as an update request.</p>
<p>
<b><code>current_password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="current_password" data-endpoint="PUTdashboard-users--user-" data-component="body"  hidden>
<br>
min:6 Account password.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="password" data-endpoint="PUTdashboard-users--user-" data-component="body"  hidden>
<br>
min:6 Account password.</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="password_confirmation" data-endpoint="PUTdashboard-users--user-" data-component="body"  hidden>
<br>
min:6 Retype account password.</p>

</form>



