# Investments - ADMIN

Manage investments

## GET Investments


List all investments

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/admin/investments?page=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/admin/investments"
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
<div id="execution-results-GETadmin-investments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-investments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-investments"></code></pre>
</div>
<div id="execution-error-GETadmin-investments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-investments"></code></pre>
</div>
<form id="form-GETadmin-investments" data-method="GET" data-path="admin/investments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-investments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-investments" onclick="tryItOut('GETadmin-investments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-investments" onclick="cancelTryOut('GETadmin-investments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-investments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/investments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETadmin-investments" data-component="query"  hidden>
<br>
Which page to show.</p>
</form>


## POST Investment


Create a new investment

> Example request:

```bash
curl -X POST \
    "https://api.sunvest.test/admin/investments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":"5,\"dre-1\"","project_id":"aut","cells":10}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/admin/investments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "5,\"dre-1\"",
    "project_id": "aut",
    "cells": 10
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-investments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-investments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-investments"></code></pre>
</div>
<div id="execution-error-POSTadmin-investments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-investments"></code></pre>
</div>
<form id="form-POSTadmin-investments" data-method="POST" data-path="admin/investments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-investments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-investments" onclick="tryItOut('POSTadmin-investments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-investments" onclick="cancelTryOut('POSTadmin-investments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-investments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/investments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="POSTadmin-investments" data-component="body" required  hidden>
<br>
Id/username of user.</p>
<p>
<b><code>project_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="project_id" data-endpoint="POSTadmin-investments" data-component="body" required  hidden>
<br>
Id/slug of project item.</p>
<p>
<b><code>cells</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="cells" data-endpoint="POSTadmin-investments" data-component="body" required  hidden>
<br>
Total number of cells the user wishes to invest in.</p>

</form>


## GET Single Investment


Get information on a single investment

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/admin/investments/corporis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/admin/investments/corporis"
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
<div id="execution-results-GETadmin-investments--investment-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-investments--investment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-investments--investment-"></code></pre>
</div>
<div id="execution-error-GETadmin-investments--investment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-investments--investment-"></code></pre>
</div>
<form id="form-GETadmin-investments--investment-" data-method="GET" data-path="admin/investments/{investment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-investments--investment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-investments--investment-" onclick="tryItOut('GETadmin-investments--investment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-investments--investment-" onclick="cancelTryOut('GETadmin-investments--investment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-investments--investment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/investments/{investment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>investment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="investment" data-endpoint="GETadmin-investments--investment-" data-component="url" required  hidden>
<br>
</p>
</form>


## PUT Investment


Update investment data. This should be a POST request

> Example request:

```bash
curl -X PUT \
    "https://api.sunvest.test/admin/investments/ducimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":"5,\"dre-1\"","project_id":"omnis","cells":10,"_method":"\"PUT\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/admin/investments/ducimus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "5,\"dre-1\"",
    "project_id": "omnis",
    "cells": 10,
    "_method": "\"PUT\""
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTadmin-investments--investment-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-investments--investment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-investments--investment-"></code></pre>
</div>
<div id="execution-error-PUTadmin-investments--investment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-investments--investment-"></code></pre>
</div>
<form id="form-PUTadmin-investments--investment-" data-method="PUT" data-path="admin/investments/{investment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-investments--investment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-investments--investment-" onclick="tryItOut('PUTadmin-investments--investment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-investments--investment-" onclick="cancelTryOut('PUTadmin-investments--investment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-investments--investment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/investments/{investment}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>admin/investments/{investment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>investment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="investment" data-endpoint="PUTadmin-investments--investment-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="PUTadmin-investments--investment-" data-component="body" required  hidden>
<br>
Id/username of user.</p>
<p>
<b><code>project_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="project_id" data-endpoint="PUTadmin-investments--investment-" data-component="body" required  hidden>
<br>
Id/slug of project item.</p>
<p>
<b><code>cells</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="cells" data-endpoint="PUTadmin-investments--investment-" data-component="body" required  hidden>
<br>
Total number of cells the user wishes to invest in.</p>
<p>
<b><code>_method</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="_method" data-endpoint="PUTadmin-investments--investment-" data-component="body" required  hidden>
<br>
This will tell backend to see it as an update request.</p>

</form>


## DELETE Investment


Soft delete a investment. This should be a POST request

> Example request:

```bash
curl -X DELETE \
    "https://api.sunvest.test/admin/investments/voluptate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"_method":"\"DELETE\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/admin/investments/voluptate"
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


<div id="execution-results-DELETEadmin-investments--investment-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-investments--investment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-investments--investment-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-investments--investment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-investments--investment-"></code></pre>
</div>
<form id="form-DELETEadmin-investments--investment-" data-method="DELETE" data-path="admin/investments/{investment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-investments--investment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-investments--investment-" onclick="tryItOut('DELETEadmin-investments--investment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-investments--investment-" onclick="cancelTryOut('DELETEadmin-investments--investment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-investments--investment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/investments/{investment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>investment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="investment" data-endpoint="DELETEadmin-investments--investment-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>_method</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="_method" data-endpoint="DELETEadmin-investments--investment-" data-component="body" required  hidden>
<br>
This will tell backend that its actually a delete request.</p>

</form>



