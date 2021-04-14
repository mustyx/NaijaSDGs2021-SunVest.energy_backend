# Auth

Manage authentication routes

## POST Register


Create a new user

> Example request:

```bash
curl -X POST \
    "https://api.sunvest.test/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"firstName":"\"Damilare\"","lastName":"\"Abi\"","email":"\"test@test.com\"","phone":"\"Abi\"","password":"\"123456\"","password_confirmation":"\"123456\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/register"
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


> Example response (200):

```json
{
    "status": "failed",
    "validation_errors": {
        "email": [
            "The email must be a valid email address."
        ],
        "phone": [
            "The phone must be a number."
        ]
    }
}
```
<div id="execution-results-POSTregister" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTregister"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTregister"></code></pre>
</div>
<div id="execution-error-POSTregister" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTregister"></code></pre>
</div>
<form id="form-POSTregister" data-method="POST" data-path="register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTregister', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTregister" onclick="tryItOut('POSTregister');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTregister" onclick="cancelTryOut('POSTregister');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTregister" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>firstName</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="firstName" data-endpoint="POSTregister" data-component="body" required  hidden>
<br>
Firstname of user.</p>
<p>
<b><code>lastName</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="lastName" data-endpoint="POSTregister" data-component="body" required  hidden>
<br>
Surname/Last name of user.</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>email</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTregister" data-component="body" required  hidden>
<br>
Email address of user.</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>numeric</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="POSTregister" data-component="body"  hidden>
<br>
Phone number of user.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTregister" data-component="body" required  hidden>
<br>
min:6 Account password.</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password_confirmation" data-endpoint="POSTregister" data-component="body" required  hidden>
<br>
min:6 Retype account password.</p>

</form>


## POST Login


Log a user into their account

> Example request:

```bash
curl -X POST \
    "https://api.sunvest.test/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"\"test@test.com\"","password":"\"123456\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "\"test@test.com\"",
    "password": "\"123456\""
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (422):

```json
{
    "status": "Error",
    "message": "Invalid credentials",
    "data": {
        "email": [
            "The email must be a valid email address."
        ]
    }
}
```
<div id="execution-results-POSTlogin" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTlogin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogin"></code></pre>
</div>
<div id="execution-error-POSTlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogin"></code></pre>
</div>
<form id="form-POSTlogin" data-method="POST" data-path="login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTlogin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTlogin" onclick="tryItOut('POSTlogin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTlogin" onclick="cancelTryOut('POSTlogin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTlogin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>email</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTlogin" data-component="body" required  hidden>
<br>
Email address of user.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTlogin" data-component="body" required  hidden>
<br>
min:6 Account password.</p>

</form>


## POST Logout


Logout a user from their account

> Example request:

```bash
curl -X POST \
    "https://api.sunvest.test/dashboard/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/logout"
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


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-POSTdashboard-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTdashboard-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTdashboard-logout"></code></pre>
</div>
<div id="execution-error-POSTdashboard-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTdashboard-logout"></code></pre>
</div>
<form id="form-POSTdashboard-logout" data-method="POST" data-path="dashboard/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTdashboard-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTdashboard-logout" onclick="tryItOut('POSTdashboard-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTdashboard-logout" onclick="cancelTryOut('POSTdashboard-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTdashboard-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>dashboard/logout</code></b>
</p>
</form>



