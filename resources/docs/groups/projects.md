# Projects

Manage projects user has investments in

## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/user/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/user/projects"
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
<div id="execution-results-GETuser-projects" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-projects"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-projects"></code></pre>
</div>
<div id="execution-error-GETuser-projects" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-projects"></code></pre>
</div>
<form id="form-GETuser-projects" data-method="GET" data-path="user/projects" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-projects', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-projects" onclick="tryItOut('GETuser-projects');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-projects" onclick="cancelTryOut('GETuser-projects');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-projects" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/projects</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "https://api.sunvest.test/user/projects" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/user/projects"
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


<div id="execution-results-POSTuser-projects" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-projects"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-projects"></code></pre>
</div>
<div id="execution-error-POSTuser-projects" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-projects"></code></pre>
</div>
<form id="form-POSTuser-projects" data-method="POST" data-path="user/projects" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-projects', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-projects" onclick="tryItOut('POSTuser-projects');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-projects" onclick="cancelTryOut('POSTuser-projects');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-projects" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/projects</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/user/projects/ullam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/user/projects/ullam"
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
<div id="execution-results-GETuser-projects--project-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-projects--project-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-projects--project-"></code></pre>
</div>
<div id="execution-error-GETuser-projects--project-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-projects--project-"></code></pre>
</div>
<form id="form-GETuser-projects--project-" data-method="GET" data-path="user/projects/{project}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-projects--project-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-projects--project-" onclick="tryItOut('GETuser-projects--project-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-projects--project-" onclick="cancelTryOut('GETuser-projects--project-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-projects--project-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/projects/{project}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>project</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="project" data-endpoint="GETuser-projects--project-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "https://api.sunvest.test/user/projects/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/user/projects/voluptas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTuser-projects--project-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTuser-projects--project-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTuser-projects--project-"></code></pre>
</div>
<div id="execution-error-PUTuser-projects--project-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTuser-projects--project-"></code></pre>
</div>
<form id="form-PUTuser-projects--project-" data-method="PUT" data-path="user/projects/{project}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTuser-projects--project-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTuser-projects--project-" onclick="tryItOut('PUTuser-projects--project-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTuser-projects--project-" onclick="cancelTryOut('PUTuser-projects--project-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTuser-projects--project-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>user/projects/{project}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>user/projects/{project}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>project</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="project" data-endpoint="PUTuser-projects--project-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "https://api.sunvest.test/user/projects/in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/user/projects/in"
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


<div id="execution-results-DELETEuser-projects--project-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEuser-projects--project-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEuser-projects--project-"></code></pre>
</div>
<div id="execution-error-DELETEuser-projects--project-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEuser-projects--project-"></code></pre>
</div>
<form id="form-DELETEuser-projects--project-" data-method="DELETE" data-path="user/projects/{project}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEuser-projects--project-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEuser-projects--project-" onclick="tryItOut('DELETEuser-projects--project-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEuser-projects--project-" onclick="cancelTryOut('DELETEuser-projects--project-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEuser-projects--project-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>user/projects/{project}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>project</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="project" data-endpoint="DELETEuser-projects--project-" data-component="url" required  hidden>
<br>
</p>
</form>



