# Projects - ADMIN

Manage projects

## GET Projects


List all projects

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/dashboard/admin/projects?page=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/admin/projects"
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


> Example response (200):

```json
{
    "status": "Success",
    "message": null,
    "data": [
        {
            "id": 1,
            "name": "5KVA Rooftop Mini Grid",
            "slug": "5kva-rooftop-mini-grid",
            "description": "Ut consectetuer ultricies est fringilla mus. Est ridiculus tempor facilisi curabitur orci montes proin. Accumsan metus risus feugiat ultricies tortor ullamcorper natoque. Urna magna bibendum ac pellentesque. Tincidunt parturient venenatis dolor ridiculus at nulla consequat. Nam molestie magna bibendum metus nascetur nulla.\r\n\r\nSi vehicula hendrerit dis justo fusce. Aptent erat molestie ac cras. Cras habitasse consequat hac lobortis ornare id. Platea justo ornare odio non morbi netus. Augue gravida iaculis sit nulla penatibus habitant. Eget tempor nullam interdum taciti maecenas.\r\n\r\nImperdiet eleifend gravida curae cubilia aenean justo. Fames eleifend ac vitae erat a. Integer mi aptent eget per odio nullam. Aliquam curabitur tristique magna class mus cubilia dis.",
            "total_cells": 120,
            "taken_cells": 0,
            "cost_per_cell": 23500,
            "profit": 22,
            "maturity_period": 20,
            "start_date": "2021-05-01T06:44:50.000000Z",
            "end_date": "2021-05-20T06:44:50.000000Z",
            "ad_due_date": "2021-04-28T06:44:50.000000Z",
            "is_active": null,
            "created_at": "2021-04-06T06:44:50.000000Z"
        }
    ]
}
```
<div id="execution-results-GETdashboard-admin-projects" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdashboard-admin-projects"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdashboard-admin-projects"></code></pre>
</div>
<div id="execution-error-GETdashboard-admin-projects" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdashboard-admin-projects"></code></pre>
</div>
<form id="form-GETdashboard-admin-projects" data-method="GET" data-path="dashboard/admin/projects" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdashboard-admin-projects', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdashboard-admin-projects" onclick="tryItOut('GETdashboard-admin-projects');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdashboard-admin-projects" onclick="cancelTryOut('GETdashboard-admin-projects');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdashboard-admin-projects" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>dashboard/admin/projects</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETdashboard-admin-projects" data-component="query"  hidden>
<br>
Which page to show.</p>
</form>


## POST Project


Create a new project

> Example request:

```bash
curl -X POST \
    "https://api.sunvest.test/dashboard/admin/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"\"5KVA Solar Mini-Grid\"","description":"eius","total_cells":50,"cost_per_cell":5000,"profit":"10.5","maturity_period":20,"start_date":"\"25\/04\/2021\"","end_date":"12\/04\/2021","ad_due_date":"\"20\/04\/2021\"","due_date":"\"25\/05\/2021\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/admin/projects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "\"5KVA Solar Mini-Grid\"",
    "description": "eius",
    "total_cells": 50,
    "cost_per_cell": 5000,
    "profit": "10.5",
    "maturity_period": 20,
    "start_date": "\"25\/04\/2021\"",
    "end_date": "12\/04\/2021",
    "ad_due_date": "\"20\/04\/2021\"",
    "due_date": "\"25\/05\/2021\""
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
    "message": "Project successfully created.",
    "data": null
}
```
<div id="execution-results-POSTdashboard-admin-projects" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTdashboard-admin-projects"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTdashboard-admin-projects"></code></pre>
</div>
<div id="execution-error-POSTdashboard-admin-projects" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTdashboard-admin-projects"></code></pre>
</div>
<form id="form-POSTdashboard-admin-projects" data-method="POST" data-path="dashboard/admin/projects" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTdashboard-admin-projects', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTdashboard-admin-projects" onclick="tryItOut('POSTdashboard-admin-projects');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTdashboard-admin-projects" onclick="cancelTryOut('POSTdashboard-admin-projects');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTdashboard-admin-projects" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>dashboard/admin/projects</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTdashboard-admin-projects" data-component="body" required  hidden>
<br>
Name of project.</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTdashboard-admin-projects" data-component="body" required  hidden>
<br>
Detailed description of projects.</p>
<p>
<b><code>total_cells</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="total_cells" data-endpoint="POSTdashboard-admin-projects" data-component="body" required  hidden>
<br>
Total number of cells the project has.</p>
<p>
<b><code>cost_per_cell</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="cost_per_cell" data-endpoint="POSTdashboard-admin-projects" data-component="body" required  hidden>
<br>
Investment cost per cell.</p>
<p>
<b><code>profit</code></b>&nbsp;&nbsp;<small>numeric</small>  &nbsp;
<input type="text" name="profit" data-endpoint="POSTdashboard-admin-projects" data-component="body" required  hidden>
<br>
Expected percentage profit after maturity</p>
<p>
<b><code>maturity_period</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="maturity_period" data-endpoint="POSTdashboard-admin-projects" data-component="body" required  hidden>
<br>
How long it will take for investment to mature in weeks.</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>date_format:d/m/Y</small>  &nbsp;
<input type="text" name="start_date" data-endpoint="POSTdashboard-admin-projects" data-component="body" required  hidden>
<br>
When project development will start.</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="end_date" data-endpoint="POSTdashboard-admin-projects" data-component="body" required  hidden>
<br>
The value must be a valid date in the format d/m/Y.</p>
<p>
<b><code>ad_due_date</code></b>&nbsp;&nbsp;<small>date_format:d/m/Y</small>  &nbsp;
<input type="text" name="ad_due_date" data-endpoint="POSTdashboard-admin-projects" data-component="body" required  hidden>
<br>
When this investment ad will expire.</p>
<p>
<b><code>due_date</code></b>&nbsp;&nbsp;<small>date_format:d/m/Y</small>  &nbsp;
<input type="text" name="due_date" data-endpoint="POSTdashboard-admin-projects" data-component="body" required  hidden>
<br>
When project development will end.</p>

</form>


## GET Single Project


Get information on a single project

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/dashboard/admin/projects/ipsam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/admin/projects/ipsam"
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
        "name": "5KVA Rooftop Mini Grid",
        "slug": "5kva-rooftop-mini-grid",
        "description": "Ut consectetuer ultricies est fringilla mus. Est ridiculus tempor facilisi curabitur orci montes proin. Accumsan metus risus feugiat ultricies tortor ullamcorper natoque. Urna magna bibendum ac pellentesque. Tincidunt parturient venenatis dolor ridiculus at nulla consequat. Nam molestie magna bibendum metus nascetur nulla.\r\n\r\nSi vehicula hendrerit dis justo fusce. Aptent erat molestie ac cras. Cras habitasse consequat hac lobortis ornare id. Platea justo ornare odio non morbi netus. Augue gravida iaculis sit nulla penatibus habitant. Eget tempor nullam interdum taciti maecenas.\r\n\r\nImperdiet eleifend gravida curae cubilia aenean justo. Fames eleifend ac vitae erat a. Integer mi aptent eget per odio nullam. Aliquam curabitur tristique magna class mus cubilia dis.",
        "total_cells": 120,
        "taken_cells": 0,
        "cost_per_cell": 23500,
        "profit": 22,
        "maturity_period": 20,
        "start_date": "2021-05-01T06:44:50.000000Z",
        "end_date": "2021-05-20T06:44:50.000000Z",
        "ad_due_date": "2021-04-28T06:44:50.000000Z",
        "is_active": null,
        "created_at": "2021-04-06T06:44:50.000000Z",
        "investments": []
    }
}
```
<div id="execution-results-GETdashboard-admin-projects--project-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdashboard-admin-projects--project-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdashboard-admin-projects--project-"></code></pre>
</div>
<div id="execution-error-GETdashboard-admin-projects--project-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdashboard-admin-projects--project-"></code></pre>
</div>
<form id="form-GETdashboard-admin-projects--project-" data-method="GET" data-path="dashboard/admin/projects/{project}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdashboard-admin-projects--project-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdashboard-admin-projects--project-" onclick="tryItOut('GETdashboard-admin-projects--project-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdashboard-admin-projects--project-" onclick="cancelTryOut('GETdashboard-admin-projects--project-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdashboard-admin-projects--project-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>dashboard/admin/projects/{project}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>project</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="project" data-endpoint="GETdashboard-admin-projects--project-" data-component="url" required  hidden>
<br>
</p>
</form>


## PUT Project


Update project data. This should be a POST request

> Example request:

```bash
curl -X PUT \
    "https://api.sunvest.test/dashboard/admin/projects/quasi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"\"5KVA Solar Mini-Grid\"","description":"possimus","total_cells":50,"cost_per_cell":5000,"profit":"10.5","maturity_period":20,"start_date":"\"25\/04\/2021\"","end_date":"12\/04\/2021","ad_due_date":"\"20\/04\/2021\"","_method":"\"PUT\"","due_date":"\"25\/05\/2021\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/admin/projects/quasi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "\"5KVA Solar Mini-Grid\"",
    "description": "possimus",
    "total_cells": 50,
    "cost_per_cell": 5000,
    "profit": "10.5",
    "maturity_period": 20,
    "start_date": "\"25\/04\/2021\"",
    "end_date": "12\/04\/2021",
    "ad_due_date": "\"20\/04\/2021\"",
    "_method": "\"PUT\"",
    "due_date": "\"25\/05\/2021\""
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
    "message": "Project successfully updated.",
    "data": {
        "id": 1,
        "name": "5KVA Rooftop Solar Mini Grid",
        "slug": "5kva-rooftop-mini-grid",
        "description": "Ut consectetuer ultricies est fringilla mus. Est ridiculus tempor facilisi curabitur orci montes proin. Accumsan metus risus feugiat ultricies tortor ullamcorper natoque. Urna magna bibendum ac pellentesque. Tincidunt parturient venenatis dolor ridiculus at nulla consequat. Nam molestie magna bibendum metus nascetur nulla.\r\n\r\nSi vehicula hendrerit dis justo fusce. Aptent erat molestie ac cras. Cras habitasse consequat hac lobortis ornare id. Platea justo ornare odio non morbi netus. Augue gravida iaculis sit nulla penatibus habitant. Eget tempor nullam interdum taciti maecenas.\r\n\r\nImperdiet eleifend gravida curae cubilia aenean justo. Fames eleifend ac vitae erat a. Integer mi aptent eget per odio nullam. Aliquam curabitur tristique magna class mus cubilia dis.",
        "total_cells": 120,
        "taken_cells": 0,
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
```
<div id="execution-results-PUTdashboard-admin-projects--project-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTdashboard-admin-projects--project-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTdashboard-admin-projects--project-"></code></pre>
</div>
<div id="execution-error-PUTdashboard-admin-projects--project-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTdashboard-admin-projects--project-"></code></pre>
</div>
<form id="form-PUTdashboard-admin-projects--project-" data-method="PUT" data-path="dashboard/admin/projects/{project}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTdashboard-admin-projects--project-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTdashboard-admin-projects--project-" onclick="tryItOut('PUTdashboard-admin-projects--project-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTdashboard-admin-projects--project-" onclick="cancelTryOut('PUTdashboard-admin-projects--project-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTdashboard-admin-projects--project-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>dashboard/admin/projects/{project}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>dashboard/admin/projects/{project}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>project</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="project" data-endpoint="PUTdashboard-admin-projects--project-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTdashboard-admin-projects--project-" data-component="body" required  hidden>
<br>
Name of project.</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="PUTdashboard-admin-projects--project-" data-component="body" required  hidden>
<br>
Detailed description of projects.</p>
<p>
<b><code>total_cells</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="total_cells" data-endpoint="PUTdashboard-admin-projects--project-" data-component="body" required  hidden>
<br>
Total number of cells the project has.</p>
<p>
<b><code>cost_per_cell</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="cost_per_cell" data-endpoint="PUTdashboard-admin-projects--project-" data-component="body" required  hidden>
<br>
Investment cost per cell.</p>
<p>
<b><code>profit</code></b>&nbsp;&nbsp;<small>numeric</small>  &nbsp;
<input type="text" name="profit" data-endpoint="PUTdashboard-admin-projects--project-" data-component="body" required  hidden>
<br>
Expected percentage profit after maturity</p>
<p>
<b><code>maturity_period</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="maturity_period" data-endpoint="PUTdashboard-admin-projects--project-" data-component="body" required  hidden>
<br>
How long it will take for investment to mature in weeks.</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>date_format:d/m/Y</small>  &nbsp;
<input type="text" name="start_date" data-endpoint="PUTdashboard-admin-projects--project-" data-component="body" required  hidden>
<br>
When project development will start.</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="end_date" data-endpoint="PUTdashboard-admin-projects--project-" data-component="body" required  hidden>
<br>
The value must be a valid date in the format d/m/Y.</p>
<p>
<b><code>ad_due_date</code></b>&nbsp;&nbsp;<small>date_format:d/m/Y</small>  &nbsp;
<input type="text" name="ad_due_date" data-endpoint="PUTdashboard-admin-projects--project-" data-component="body" required  hidden>
<br>
When this investment ad will expire.</p>
<p>
<b><code>_method</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="_method" data-endpoint="PUTdashboard-admin-projects--project-" data-component="body" required  hidden>
<br>
This will tell backend to see it as an update request.</p>
<p>
<b><code>due_date</code></b>&nbsp;&nbsp;<small>date_format:d/m/Y</small>  &nbsp;
<input type="text" name="due_date" data-endpoint="PUTdashboard-admin-projects--project-" data-component="body" required  hidden>
<br>
When project development will end.</p>

</form>


## DELETE Project


Soft delete a project. This should be a POST request

> Example request:

```bash
curl -X DELETE \
    "https://api.sunvest.test/dashboard/admin/projects/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"_method":"\"DELETE\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/admin/projects/quia"
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
<div id="execution-results-DELETEdashboard-admin-projects--project-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEdashboard-admin-projects--project-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEdashboard-admin-projects--project-"></code></pre>
</div>
<div id="execution-error-DELETEdashboard-admin-projects--project-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEdashboard-admin-projects--project-"></code></pre>
</div>
<form id="form-DELETEdashboard-admin-projects--project-" data-method="DELETE" data-path="dashboard/admin/projects/{project}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEdashboard-admin-projects--project-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEdashboard-admin-projects--project-" onclick="tryItOut('DELETEdashboard-admin-projects--project-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEdashboard-admin-projects--project-" onclick="cancelTryOut('DELETEdashboard-admin-projects--project-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEdashboard-admin-projects--project-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>dashboard/admin/projects/{project}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>project</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="project" data-endpoint="DELETEdashboard-admin-projects--project-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>_method</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="_method" data-endpoint="DELETEdashboard-admin-projects--project-" data-component="body" required  hidden>
<br>
This will tell backend that its actually a delete request.</p>

</form>



