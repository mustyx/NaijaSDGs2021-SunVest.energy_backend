# Projects - ADMIN

Manage projects

## GET Projects


List all projects

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/admin/projects?page=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/admin/projects"
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
<div id="execution-results-GETadmin-projects" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-projects"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-projects"></code></pre>
</div>
<div id="execution-error-GETadmin-projects" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-projects"></code></pre>
</div>
<form id="form-GETadmin-projects" data-method="GET" data-path="admin/projects" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-projects', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-projects" onclick="tryItOut('GETadmin-projects');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-projects" onclick="cancelTryOut('GETadmin-projects');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-projects" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/projects</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETadmin-projects" data-component="query"  hidden>
<br>
Which page to show.</p>
</form>


## POST Project


Create a new project

> Example request:

```bash
curl -X POST \
    "https://api.sunvest.test/admin/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"\"5KVA Solar Mini-Grid\"","description":"qui","total_cells":50,"cost_per_cell":5000,"profit":"10.5","maturity_period":20,"start_date":"\"25\/04\/2021\"","end_date":"09\/04\/2021","ad_due_date":"\"20\/04\/2021\"","due_date":"\"25\/05\/2021\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/admin/projects"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "\"5KVA Solar Mini-Grid\"",
    "description": "qui",
    "total_cells": 50,
    "cost_per_cell": 5000,
    "profit": "10.5",
    "maturity_period": 20,
    "start_date": "\"25\/04\/2021\"",
    "end_date": "09\/04\/2021",
    "ad_due_date": "\"20\/04\/2021\"",
    "due_date": "\"25\/05\/2021\""
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-projects" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-projects"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-projects"></code></pre>
</div>
<div id="execution-error-POSTadmin-projects" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-projects"></code></pre>
</div>
<form id="form-POSTadmin-projects" data-method="POST" data-path="admin/projects" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-projects', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-projects" onclick="tryItOut('POSTadmin-projects');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-projects" onclick="cancelTryOut('POSTadmin-projects');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-projects" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/projects</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTadmin-projects" data-component="body" required  hidden>
<br>
Name of project.</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTadmin-projects" data-component="body" required  hidden>
<br>
Detailed description of projects.</p>
<p>
<b><code>total_cells</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="total_cells" data-endpoint="POSTadmin-projects" data-component="body" required  hidden>
<br>
Total number of cells the project has.</p>
<p>
<b><code>cost_per_cell</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="cost_per_cell" data-endpoint="POSTadmin-projects" data-component="body" required  hidden>
<br>
Investment cost per cell.</p>
<p>
<b><code>profit</code></b>&nbsp;&nbsp;<small>numeric</small>  &nbsp;
<input type="text" name="profit" data-endpoint="POSTadmin-projects" data-component="body" required  hidden>
<br>
Expected percentage profit after maturity</p>
<p>
<b><code>maturity_period</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="maturity_period" data-endpoint="POSTadmin-projects" data-component="body" required  hidden>
<br>
How long it will take for investment to mature in weeks.</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>date_format:d/m/Y</small>  &nbsp;
<input type="text" name="start_date" data-endpoint="POSTadmin-projects" data-component="body" required  hidden>
<br>
When project development will start.</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="end_date" data-endpoint="POSTadmin-projects" data-component="body" required  hidden>
<br>
The value must be a valid date in the format d/m/Y.</p>
<p>
<b><code>ad_due_date</code></b>&nbsp;&nbsp;<small>date_format:d/m/Y</small>  &nbsp;
<input type="text" name="ad_due_date" data-endpoint="POSTadmin-projects" data-component="body" required  hidden>
<br>
When this investment ad will expire.</p>
<p>
<b><code>due_date</code></b>&nbsp;&nbsp;<small>date_format:d/m/Y</small>  &nbsp;
<input type="text" name="due_date" data-endpoint="POSTadmin-projects" data-component="body" required  hidden>
<br>
When project development will end.</p>

</form>


## GET Single Project


Get information on a single project

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/admin/projects/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/admin/projects/voluptas"
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
<div id="execution-results-GETadmin-projects--project-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-projects--project-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-projects--project-"></code></pre>
</div>
<div id="execution-error-GETadmin-projects--project-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-projects--project-"></code></pre>
</div>
<form id="form-GETadmin-projects--project-" data-method="GET" data-path="admin/projects/{project}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-projects--project-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-projects--project-" onclick="tryItOut('GETadmin-projects--project-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-projects--project-" onclick="cancelTryOut('GETadmin-projects--project-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-projects--project-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/projects/{project}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>project</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="project" data-endpoint="GETadmin-projects--project-" data-component="url" required  hidden>
<br>
</p>
</form>


## PUT Project


Update project data. This should be a POST request

> Example request:

```bash
curl -X PUT \
    "https://api.sunvest.test/admin/projects/quidem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"\"5KVA Solar Mini-Grid\"","description":"est","total_cells":50,"cost_per_cell":5000,"profit":"10.5","maturity_period":20,"start_date":"\"25\/04\/2021\"","end_date":"09\/04\/2021","ad_due_date":"\"20\/04\/2021\"","_method":"\"PUT\"","due_date":"\"25\/05\/2021\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/admin/projects/quidem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "\"5KVA Solar Mini-Grid\"",
    "description": "est",
    "total_cells": 50,
    "cost_per_cell": 5000,
    "profit": "10.5",
    "maturity_period": 20,
    "start_date": "\"25\/04\/2021\"",
    "end_date": "09\/04\/2021",
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


<div id="execution-results-PUTadmin-projects--project-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTadmin-projects--project-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTadmin-projects--project-"></code></pre>
</div>
<div id="execution-error-PUTadmin-projects--project-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTadmin-projects--project-"></code></pre>
</div>
<form id="form-PUTadmin-projects--project-" data-method="PUT" data-path="admin/projects/{project}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTadmin-projects--project-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTadmin-projects--project-" onclick="tryItOut('PUTadmin-projects--project-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTadmin-projects--project-" onclick="cancelTryOut('PUTadmin-projects--project-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTadmin-projects--project-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>admin/projects/{project}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>admin/projects/{project}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>project</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="project" data-endpoint="PUTadmin-projects--project-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTadmin-projects--project-" data-component="body" required  hidden>
<br>
Name of project.</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="PUTadmin-projects--project-" data-component="body" required  hidden>
<br>
Detailed description of projects.</p>
<p>
<b><code>total_cells</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="total_cells" data-endpoint="PUTadmin-projects--project-" data-component="body" required  hidden>
<br>
Total number of cells the project has.</p>
<p>
<b><code>cost_per_cell</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="cost_per_cell" data-endpoint="PUTadmin-projects--project-" data-component="body" required  hidden>
<br>
Investment cost per cell.</p>
<p>
<b><code>profit</code></b>&nbsp;&nbsp;<small>numeric</small>  &nbsp;
<input type="text" name="profit" data-endpoint="PUTadmin-projects--project-" data-component="body" required  hidden>
<br>
Expected percentage profit after maturity</p>
<p>
<b><code>maturity_period</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="maturity_period" data-endpoint="PUTadmin-projects--project-" data-component="body" required  hidden>
<br>
How long it will take for investment to mature in weeks.</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>date_format:d/m/Y</small>  &nbsp;
<input type="text" name="start_date" data-endpoint="PUTadmin-projects--project-" data-component="body" required  hidden>
<br>
When project development will start.</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="end_date" data-endpoint="PUTadmin-projects--project-" data-component="body" required  hidden>
<br>
The value must be a valid date in the format d/m/Y.</p>
<p>
<b><code>ad_due_date</code></b>&nbsp;&nbsp;<small>date_format:d/m/Y</small>  &nbsp;
<input type="text" name="ad_due_date" data-endpoint="PUTadmin-projects--project-" data-component="body" required  hidden>
<br>
When this investment ad will expire.</p>
<p>
<b><code>_method</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="_method" data-endpoint="PUTadmin-projects--project-" data-component="body" required  hidden>
<br>
This will tell backend to see it as an update request.</p>
<p>
<b><code>due_date</code></b>&nbsp;&nbsp;<small>date_format:d/m/Y</small>  &nbsp;
<input type="text" name="due_date" data-endpoint="PUTadmin-projects--project-" data-component="body" required  hidden>
<br>
When project development will end.</p>

</form>


## DELETE Project


Soft delete a project. This should be a POST request

> Example request:

```bash
curl -X DELETE \
    "https://api.sunvest.test/admin/projects/facere" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"_method":"\"DELETE\""}'

```

```javascript
const url = new URL(
    "https://api.sunvest.test/admin/projects/facere"
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


<div id="execution-results-DELETEadmin-projects--project-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEadmin-projects--project-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEadmin-projects--project-"></code></pre>
</div>
<div id="execution-error-DELETEadmin-projects--project-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEadmin-projects--project-"></code></pre>
</div>
<form id="form-DELETEadmin-projects--project-" data-method="DELETE" data-path="admin/projects/{project}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEadmin-projects--project-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEadmin-projects--project-" onclick="tryItOut('DELETEadmin-projects--project-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEadmin-projects--project-" onclick="cancelTryOut('DELETEadmin-projects--project-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEadmin-projects--project-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>admin/projects/{project}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>project</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="project" data-endpoint="DELETEadmin-projects--project-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>_method</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="_method" data-endpoint="DELETEadmin-projects--project-" data-component="body" required  hidden>
<br>
This will tell backend that its actually a delete request.</p>

</form>



