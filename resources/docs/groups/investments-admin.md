# Investments - ADMIN

Manage investments

## GET Investments


List all investments

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/dashboard/admin/investments?page=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/admin/investments"
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
<div id="execution-results-GETdashboard-admin-investments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdashboard-admin-investments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdashboard-admin-investments"></code></pre>
</div>
<div id="execution-error-GETdashboard-admin-investments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdashboard-admin-investments"></code></pre>
</div>
<form id="form-GETdashboard-admin-investments" data-method="GET" data-path="dashboard/admin/investments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdashboard-admin-investments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdashboard-admin-investments" onclick="tryItOut('GETdashboard-admin-investments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdashboard-admin-investments" onclick="cancelTryOut('GETdashboard-admin-investments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdashboard-admin-investments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>dashboard/admin/investments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETdashboard-admin-investments" data-component="query"  hidden>
<br>
Which page to show.</p>
</form>


## POST Investment


Create a new investment

> Example request:

```bash
curl -X POST \
    "https://api.sunvest.test/dashboard/admin/investments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":"5,\"dre-1\"","project_id":"quia","cells":10}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/admin/investments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "5,\"dre-1\"",
    "project_id": "quia",
    "cells": 10
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
    "status": "Success",
    "message": "Investment successfully created.",
    "data": null
}
```
<div id="execution-results-POSTdashboard-admin-investments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTdashboard-admin-investments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTdashboard-admin-investments"></code></pre>
</div>
<div id="execution-error-POSTdashboard-admin-investments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTdashboard-admin-investments"></code></pre>
</div>
<form id="form-POSTdashboard-admin-investments" data-method="POST" data-path="dashboard/admin/investments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTdashboard-admin-investments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTdashboard-admin-investments" onclick="tryItOut('POSTdashboard-admin-investments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTdashboard-admin-investments" onclick="cancelTryOut('POSTdashboard-admin-investments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTdashboard-admin-investments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>dashboard/admin/investments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="POSTdashboard-admin-investments" data-component="body" required  hidden>
<br>
Id/username of user.</p>
<p>
<b><code>project_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="project_id" data-endpoint="POSTdashboard-admin-investments" data-component="body" required  hidden>
<br>
Id/slug of project item.</p>
<p>
<b><code>cells</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="cells" data-endpoint="POSTdashboard-admin-investments" data-component="body" required  hidden>
<br>
Total number of cells the user wishes to invest in.</p>

</form>


## GET Single Investment


Get information on a single investment

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/dashboard/admin/investments/dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/admin/investments/dolorem"
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


> Example response (200):

```json
{
    "status": "Success",
    "message": null,
    "data": {
        "id": 1,
        "user_id": 2,
        "project_id": 1,
        "cells": 15,
        "cost_per_cell": 23500,
        "profit": 22,
        "maturity_period": 20,
        "start_date": "1970-05-22T00:00:00.000000Z",
        "due_date": "1970-05-22T00:00:00.000000Z",
        "created_at": "2021-04-09T14:39:32.000000Z",
        "project": {
            "id": 1,
            "name": "5KVA Rooftop Solar Mini Grid",
            "slug": "5kva-rooftop-mini-grid",
            "description": "Ut consectetuer ultricies est fringilla mus. Est ridiculus tempor facilisi curabitur orci montes proin. Accumsan metus risus feugiat ultricies tortor ullamcorper natoque. Urna magna bibendum ac pellentesque. Tincidunt parturient venenatis dolor ridiculus at nulla consequat. Nam molestie magna bibendum metus nascetur nulla.\r\n\r\nSi vehicula hendrerit dis justo fusce. Aptent erat molestie ac cras. Cras habitasse consequat hac lobortis ornare id. Platea justo ornare odio non morbi netus. Augue gravida iaculis sit nulla penatibus habitant. Eget tempor nullam interdum taciti maecenas.\r\n\r\nImperdiet eleifend gravida curae cubilia aenean justo. Fames eleifend ac vitae erat a. Integer mi aptent eget per odio nullam. Aliquam curabitur tristique magna class mus cubilia dis.",
            "total_cells": 120,
            "taken_cells": "15",
            "cost_per_cell": 23500,
            "profit": 22,
            "maturity_period": 20,
            "start_date": "2021-05-05T14:30:52.000000Z",
            "end_date": "2021-05-20T14:30:52.000000Z",
            "ad_due_date": "2021-04-28T14:30:52.000000Z",
            "is_active": null,
            "created_at": "2021-04-06T06:44:50.000000Z"
        }
    }
}
```
<div id="execution-results-GETdashboard-admin-investments--investment-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdashboard-admin-investments--investment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdashboard-admin-investments--investment-"></code></pre>
</div>
<div id="execution-error-GETdashboard-admin-investments--investment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdashboard-admin-investments--investment-"></code></pre>
</div>
<form id="form-GETdashboard-admin-investments--investment-" data-method="GET" data-path="dashboard/admin/investments/{investment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdashboard-admin-investments--investment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdashboard-admin-investments--investment-" onclick="tryItOut('GETdashboard-admin-investments--investment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdashboard-admin-investments--investment-" onclick="cancelTryOut('GETdashboard-admin-investments--investment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdashboard-admin-investments--investment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>dashboard/admin/investments/{investment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>investment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="investment" data-endpoint="GETdashboard-admin-investments--investment-" data-component="url" required  hidden>
<br>
</p>
</form>


## PUT Investment


Update investment data. This should be a POST request

> Example request:

```bash
curl -X PUT \
    "https://api.sunvest.test/dashboard/admin/investments/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":"5,\"dre-1\"","project_id":"molestiae","cells":10,"_method":"\"PUT\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/admin/investments/quia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "5,\"dre-1\"",
    "project_id": "molestiae",
    "cells": 10,
    "_method": "\"PUT\""
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "status": "Success",
    "message": "Investment successfully updated.",
    "data": {
        "id": 1,
        "user_id": 3,
        "project_id": 1,
        "cells": 12,
        "cost_per_cell": 23500,
        "profit": 22,
        "maturity_period": 20,
        "start_date": "1970-05-22T00:00:00.000000Z",
        "due_date": "1970-05-22T00:00:00.000000Z",
        "created_at": "2021-04-09T14:39:32.000000Z"
    }
}
```
<div id="execution-results-PUTdashboard-admin-investments--investment-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTdashboard-admin-investments--investment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTdashboard-admin-investments--investment-"></code></pre>
</div>
<div id="execution-error-PUTdashboard-admin-investments--investment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTdashboard-admin-investments--investment-"></code></pre>
</div>
<form id="form-PUTdashboard-admin-investments--investment-" data-method="PUT" data-path="dashboard/admin/investments/{investment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTdashboard-admin-investments--investment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTdashboard-admin-investments--investment-" onclick="tryItOut('PUTdashboard-admin-investments--investment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTdashboard-admin-investments--investment-" onclick="cancelTryOut('PUTdashboard-admin-investments--investment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTdashboard-admin-investments--investment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>dashboard/admin/investments/{investment}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>dashboard/admin/investments/{investment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>investment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="investment" data-endpoint="PUTdashboard-admin-investments--investment-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="PUTdashboard-admin-investments--investment-" data-component="body" required  hidden>
<br>
Id/username of user.</p>
<p>
<b><code>project_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="project_id" data-endpoint="PUTdashboard-admin-investments--investment-" data-component="body" required  hidden>
<br>
Id/slug of project item.</p>
<p>
<b><code>cells</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="cells" data-endpoint="PUTdashboard-admin-investments--investment-" data-component="body" required  hidden>
<br>
Total number of cells the user wishes to invest in.</p>
<p>
<b><code>_method</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="_method" data-endpoint="PUTdashboard-admin-investments--investment-" data-component="body" required  hidden>
<br>
This will tell backend to see it as an update request.</p>

</form>


## DELETE Investment


Soft delete a investment. This should be a POST request

> Example request:

```bash
curl -X DELETE \
    "https://api.sunvest.test/dashboard/admin/investments/nihil" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"_method":"\"DELETE\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/admin/investments/nihil"
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
<div id="execution-results-DELETEdashboard-admin-investments--investment-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEdashboard-admin-investments--investment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEdashboard-admin-investments--investment-"></code></pre>
</div>
<div id="execution-error-DELETEdashboard-admin-investments--investment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEdashboard-admin-investments--investment-"></code></pre>
</div>
<form id="form-DELETEdashboard-admin-investments--investment-" data-method="DELETE" data-path="dashboard/admin/investments/{investment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEdashboard-admin-investments--investment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEdashboard-admin-investments--investment-" onclick="tryItOut('DELETEdashboard-admin-investments--investment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEdashboard-admin-investments--investment-" onclick="cancelTryOut('DELETEdashboard-admin-investments--investment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEdashboard-admin-investments--investment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>dashboard/admin/investments/{investment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>investment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="investment" data-endpoint="DELETEdashboard-admin-investments--investment-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>_method</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="_method" data-endpoint="DELETEdashboard-admin-investments--investment-" data-component="body" required  hidden>
<br>
This will tell backend that its actually a delete request.</p>

</form>



