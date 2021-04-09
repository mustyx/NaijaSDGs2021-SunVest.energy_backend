# Investments

Manage investments

## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/user/investments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/user/investments"
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
<div id="execution-results-GETuser-investments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-investments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-investments"></code></pre>
</div>
<div id="execution-error-GETuser-investments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-investments"></code></pre>
</div>
<form id="form-GETuser-investments" data-method="GET" data-path="user/investments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-investments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-investments" onclick="tryItOut('GETuser-investments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-investments" onclick="cancelTryOut('GETuser-investments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-investments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/investments</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "https://api.sunvest.test/user/investments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/user/investments"
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


<div id="execution-results-POSTuser-investments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-investments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-investments"></code></pre>
</div>
<div id="execution-error-POSTuser-investments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-investments"></code></pre>
</div>
<form id="form-POSTuser-investments" data-method="POST" data-path="user/investments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-investments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-investments" onclick="tryItOut('POSTuser-investments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-investments" onclick="cancelTryOut('POSTuser-investments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-investments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/investments</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "https://api.sunvest.test/user/investments/perferendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/user/investments/perferendis"
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
<div id="execution-results-GETuser-investments--investment-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-investments--investment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-investments--investment-"></code></pre>
</div>
<div id="execution-error-GETuser-investments--investment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-investments--investment-"></code></pre>
</div>
<form id="form-GETuser-investments--investment-" data-method="GET" data-path="user/investments/{investment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-investments--investment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-investments--investment-" onclick="tryItOut('GETuser-investments--investment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-investments--investment-" onclick="cancelTryOut('GETuser-investments--investment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-investments--investment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/investments/{investment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>investment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="investment" data-endpoint="GETuser-investments--investment-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "https://api.sunvest.test/user/investments/dolorum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/user/investments/dolorum"
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


<div id="execution-results-PUTuser-investments--investment-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTuser-investments--investment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTuser-investments--investment-"></code></pre>
</div>
<div id="execution-error-PUTuser-investments--investment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTuser-investments--investment-"></code></pre>
</div>
<form id="form-PUTuser-investments--investment-" data-method="PUT" data-path="user/investments/{investment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTuser-investments--investment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTuser-investments--investment-" onclick="tryItOut('PUTuser-investments--investment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTuser-investments--investment-" onclick="cancelTryOut('PUTuser-investments--investment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTuser-investments--investment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>user/investments/{investment}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>user/investments/{investment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>investment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="investment" data-endpoint="PUTuser-investments--investment-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "https://api.sunvest.test/user/investments/repellendus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "https://api.sunvest.test/user/investments/repellendus"
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


<div id="execution-results-DELETEuser-investments--investment-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEuser-investments--investment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEuser-investments--investment-"></code></pre>
</div>
<div id="execution-error-DELETEuser-investments--investment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEuser-investments--investment-"></code></pre>
</div>
<form id="form-DELETEuser-investments--investment-" data-method="DELETE" data-path="user/investments/{investment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEuser-investments--investment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEuser-investments--investment-" onclick="tryItOut('DELETEuser-investments--investment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEuser-investments--investment-" onclick="cancelTryOut('DELETEuser-investments--investment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEuser-investments--investment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>user/investments/{investment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>investment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="investment" data-endpoint="DELETEuser-investments--investment-" data-component="url" required  hidden>
<br>
</p>
</form>



