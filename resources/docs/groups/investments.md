# Investments

Manage investments

## GET Investments


List all investments

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/dashboard/investments?page=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/investments"
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
<div id="execution-results-GETdashboard-investments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdashboard-investments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdashboard-investments"></code></pre>
</div>
<div id="execution-error-GETdashboard-investments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdashboard-investments"></code></pre>
</div>
<form id="form-GETdashboard-investments" data-method="GET" data-path="dashboard/investments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdashboard-investments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdashboard-investments" onclick="tryItOut('GETdashboard-investments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdashboard-investments" onclick="cancelTryOut('GETdashboard-investments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdashboard-investments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>dashboard/investments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETdashboard-investments" data-component="query"  hidden>
<br>
Which page to show.</p>
</form>


## POST Investment


Create a new investment

> Example request:

```bash
curl -X POST \
    "https://api.sunvest.test/dashboard/investments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"project_id":"quasi","cells":10,"user_id":"5,\"dre-1\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/investments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "project_id": "quasi",
    "cells": 10,
    "user_id": "5,\"dre-1\""
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
<div id="execution-results-POSTdashboard-investments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTdashboard-investments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTdashboard-investments"></code></pre>
</div>
<div id="execution-error-POSTdashboard-investments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTdashboard-investments"></code></pre>
</div>
<form id="form-POSTdashboard-investments" data-method="POST" data-path="dashboard/investments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTdashboard-investments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTdashboard-investments" onclick="tryItOut('POSTdashboard-investments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTdashboard-investments" onclick="cancelTryOut('POSTdashboard-investments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTdashboard-investments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>dashboard/investments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>project_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="project_id" data-endpoint="POSTdashboard-investments" data-component="body" required  hidden>
<br>
Id/slug of project item.</p>
<p>
<b><code>cells</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="cells" data-endpoint="POSTdashboard-investments" data-component="body" required  hidden>
<br>
Total number of cells the user wishes to invest in.</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="POSTdashboard-investments" data-component="body" required  hidden>
<br>
Id/username of user.</p>

</form>


## GET Single Investment


Get information on a single investment

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/dashboard/investments/sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/investments/sint"
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
<div id="execution-results-GETdashboard-investments--investment-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdashboard-investments--investment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdashboard-investments--investment-"></code></pre>
</div>
<div id="execution-error-GETdashboard-investments--investment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdashboard-investments--investment-"></code></pre>
</div>
<form id="form-GETdashboard-investments--investment-" data-method="GET" data-path="dashboard/investments/{investment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdashboard-investments--investment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdashboard-investments--investment-" onclick="tryItOut('GETdashboard-investments--investment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdashboard-investments--investment-" onclick="cancelTryOut('GETdashboard-investments--investment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdashboard-investments--investment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>dashboard/investments/{investment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>investment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="investment" data-endpoint="GETdashboard-investments--investment-" data-component="url" required  hidden>
<br>
</p>
</form>



