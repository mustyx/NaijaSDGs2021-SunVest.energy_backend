# Dashboard - ADMIN

Manage dashboard

## GET Dashboard data




> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/dashboard/admin" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/admin"
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
        "projects": 4,
        "investments": 0,
        "total_cells": "600",
        "taken_cells": 0,
        "amount_invested": 0
    }
}
```
<div id="execution-results-GETdashboard-admin" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdashboard-admin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdashboard-admin"></code></pre>
</div>
<div id="execution-error-GETdashboard-admin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdashboard-admin"></code></pre>
</div>
<form id="form-GETdashboard-admin" data-method="GET" data-path="dashboard/admin" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdashboard-admin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdashboard-admin" onclick="tryItOut('GETdashboard-admin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdashboard-admin" onclick="cancelTryOut('GETdashboard-admin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdashboard-admin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>dashboard/admin</code></b>
</p>
</form>



