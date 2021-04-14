# Projects

Manage projects user has investments in

## GET Projects


List all projects

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/dashboard/projects?page=3" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/projects"
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
<div id="execution-results-GETdashboard-projects" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdashboard-projects"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdashboard-projects"></code></pre>
</div>
<div id="execution-error-GETdashboard-projects" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdashboard-projects"></code></pre>
</div>
<form id="form-GETdashboard-projects" data-method="GET" data-path="dashboard/projects" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdashboard-projects', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdashboard-projects" onclick="tryItOut('GETdashboard-projects');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdashboard-projects" onclick="cancelTryOut('GETdashboard-projects');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdashboard-projects" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>dashboard/projects</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETdashboard-projects" data-component="query"  hidden>
<br>
Which page to show.</p>
</form>


## GET Single Project


Get information on a single project

> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/dashboard/projects/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/dashboard/projects/et"
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
<div id="execution-results-GETdashboard-projects--project-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdashboard-projects--project-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdashboard-projects--project-"></code></pre>
</div>
<div id="execution-error-GETdashboard-projects--project-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdashboard-projects--project-"></code></pre>
</div>
<form id="form-GETdashboard-projects--project-" data-method="GET" data-path="dashboard/projects/{project}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdashboard-projects--project-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdashboard-projects--project-" onclick="tryItOut('GETdashboard-projects--project-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdashboard-projects--project-" onclick="cancelTryOut('GETdashboard-projects--project-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdashboard-projects--project-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>dashboard/projects/{project}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>project</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="project" data-endpoint="GETdashboard-projects--project-" data-component="url" required  hidden>
<br>
</p>
</form>



