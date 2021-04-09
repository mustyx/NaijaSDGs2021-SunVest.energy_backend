# Users

Manage user

## GET Users


List all users with extra details

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/user/users?page=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/user/users"
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
<div id="execution-results-GETuser-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-users"></code></pre>
</div>
<div id="execution-error-GETuser-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-users"></code></pre>
</div>
<form id="form-GETuser-users" data-method="GET" data-path="user/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-users" onclick="tryItOut('GETuser-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-users" onclick="cancelTryOut('GETuser-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/users</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETuser-users" data-component="query"  hidden>
<br>
Which page to show.</p>
</form>


## user/users




> Example request:

```bash
curl -X POST \
    "https://api.sunvest.test/user/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/user/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTuser-users" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-users"></code></pre>
</div>
<div id="execution-error-POSTuser-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-users"></code></pre>
</div>
<form id="form-POSTuser-users" data-method="POST" data-path="user/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-users" onclick="tryItOut('POSTuser-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-users" onclick="cancelTryOut('POSTuser-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/users</code></b>
</p>
</form>


## GET User


Get information on a single user

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/user/users/in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/user/users/in"
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
<div id="execution-results-GETuser-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-users--user-"></code></pre>
</div>
<div id="execution-error-GETuser-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-users--user-"></code></pre>
</div>
<form id="form-GETuser-users--user-" data-method="GET" data-path="user/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-users--user-" onclick="tryItOut('GETuser-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-users--user-" onclick="cancelTryOut('GETuser-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETuser-users--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## PUT User


Update user data. This should be a POST request

> Example request:

```bash
curl -X PUT \
    "https://api.sunvest.test/user/users/voluptate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"firstName":"\"Damilare\"","lastName":"\"Abi\"","phone":"\"Abi\"","update_type":"\"profile\"","_method":"\"PUT\"","current_password":"\"123456\"","password":"\"123456\"","password_confirmation":"\"123456\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/user/users/voluptate"
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


<div id="execution-results-PUTuser-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTuser-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTuser-users--user-"></code></pre>
</div>
<div id="execution-error-PUTuser-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTuser-users--user-"></code></pre>
</div>
<form id="form-PUTuser-users--user-" data-method="PUT" data-path="user/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTuser-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTuser-users--user-" onclick="tryItOut('PUTuser-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTuser-users--user-" onclick="cancelTryOut('PUTuser-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTuser-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>user/users/{user}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>user/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="PUTuser-users--user-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>firstName</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="firstName" data-endpoint="PUTuser-users--user-" data-component="body"  hidden>
<br>
Firstname of user.</p>
<p>
<b><code>lastName</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="lastName" data-endpoint="PUTuser-users--user-" data-component="body"  hidden>
<br>
Surname/Last name of user.</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>numeric</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="PUTuser-users--user-" data-component="body"  hidden>
<br>
Phone number of user.</p>
<p>
<b><code>update_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="update_type" data-endpoint="PUTuser-users--user-" data-component="body" required  hidden>
<br>
in:profile,password What type of update whether for profile data or password.</p>
<p>
<b><code>_method</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="_method" data-endpoint="PUTuser-users--user-" data-component="body" required  hidden>
<br>
This will tell backend to see it as an update request.</p>
<p>
<b><code>current_password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="current_password" data-endpoint="PUTuser-users--user-" data-component="body"  hidden>
<br>
min:6 Account password.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="password" data-endpoint="PUTuser-users--user-" data-component="body"  hidden>
<br>
min:6 Account password.</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="password_confirmation" data-endpoint="PUTuser-users--user-" data-component="body"  hidden>
<br>
min:6 Retype account password.</p>

</form>


## user/users/{user}




> Example request:

```bash
curl -X DELETE \
    "https://api.sunvest.test/user/users/eveniet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/user/users/eveniet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEuser-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEuser-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEuser-users--user-"></code></pre>
</div>
<div id="execution-error-DELETEuser-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEuser-users--user-"></code></pre>
</div>
<form id="form-DELETEuser-users--user-" data-method="DELETE" data-path="user/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEuser-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEuser-users--user-" onclick="tryItOut('DELETEuser-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEuser-users--user-" onclick="cancelTryOut('DELETEuser-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEuser-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>user/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="DELETEuser-users--user-" data-component="url" required  hidden>
<br>
</p>
</form>



