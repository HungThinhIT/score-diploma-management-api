# Endpoints


## api/development/auth/login




> Example request:

```bash
curl -X POST \
    "http://localhost/api/development/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"emelie42@example.net","password":"sapiente","wallet":"facilis"}'

```

```javascript
const url = new URL(
    "http://localhost/api/development/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "emelie42@example.net",
    "password": "sapiente",
    "wallet": "facilis"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-development-auth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-development-auth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-development-auth-login"></code></pre>
</div>
<div id="execution-error-POSTapi-development-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-development-auth-login"></code></pre>
</div>
<form id="form-POSTapi-development-auth-login" data-method="POST" data-path="api/development/auth/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-development-auth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-development-auth-login" onclick="tryItOut('POSTapi-development-auth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-development-auth-login" onclick="cancelTryOut('POSTapi-development-auth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-development-auth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/development/auth/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-development-auth-login" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-development-auth-login" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>wallet</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="wallet" data-endpoint="POSTapi-development-auth-login" data-component="body" required  hidden>
<br>

</p>

</form>


## api/client/organization




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/client/organization" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"org_id":17}'

```

```javascript
const url = new URL(
    "http://localhost/api/client/organization"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "org_id": 17
}

fetch(url, {
    method: "GET",
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
<div id="execution-results-GETapi-client-organization" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-client-organization"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-client-organization"></code></pre>
</div>
<div id="execution-error-GETapi-client-organization" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-client-organization"></code></pre>
</div>
<form id="form-GETapi-client-organization" data-method="GET" data-path="api/client/organization" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-client-organization', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-client-organization" onclick="tryItOut('GETapi-client-organization');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-client-organization" onclick="cancelTryOut('GETapi-client-organization');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-client-organization" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/client/organization</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>org_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="org_id" data-endpoint="GETapi-client-organization" data-component="body" required  hidden>
<br>

</p>

</form>


## api/client/organization




> Example request:

```bash
curl -X PATCH \
    "http://localhost/api/client/organization" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/client/organization"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PATCH",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PATCHapi-client-organization" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-client-organization"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-client-organization"></code></pre>
</div>
<div id="execution-error-PATCHapi-client-organization" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-client-organization"></code></pre>
</div>
<form id="form-PATCHapi-client-organization" data-method="PATCH" data-path="api/client/organization" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-client-organization', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-client-organization" onclick="tryItOut('PATCHapi-client-organization');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-client-organization" onclick="cancelTryOut('PATCHapi-client-organization');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-client-organization" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/client/organization</code></b>
</p>
</form>


## api/client/permissions




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/client/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/client/permissions"
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
<div id="execution-results-GETapi-client-permissions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-client-permissions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-client-permissions"></code></pre>
</div>
<div id="execution-error-GETapi-client-permissions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-client-permissions"></code></pre>
</div>
<form id="form-GETapi-client-permissions" data-method="GET" data-path="api/client/permissions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-client-permissions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-client-permissions" onclick="tryItOut('GETapi-client-permissions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-client-permissions" onclick="cancelTryOut('GETapi-client-permissions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-client-permissions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/client/permissions</code></b>
</p>
</form>


## api/client/classrooms




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/client/classrooms" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/client/classrooms"
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
<div id="execution-results-GETapi-client-classrooms" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-client-classrooms"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-client-classrooms"></code></pre>
</div>
<div id="execution-error-GETapi-client-classrooms" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-client-classrooms"></code></pre>
</div>
<form id="form-GETapi-client-classrooms" data-method="GET" data-path="api/client/classrooms" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-client-classrooms', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-client-classrooms" onclick="tryItOut('GETapi-client-classrooms');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-client-classrooms" onclick="cancelTryOut('GETapi-client-classrooms');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-client-classrooms" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/client/classrooms</code></b>
</p>
</form>


## api/client/classrooms




> Example request:

```bash
curl -X POST \
    "http://localhost/api/client/classrooms" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"class_name":"consequatur","start_year":7.2808786100000003,"code":"autem"}'

```

```javascript
const url = new URL(
    "http://localhost/api/client/classrooms"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "class_name": "consequatur",
    "start_year": 7.2808786100000003,
    "code": "autem"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-client-classrooms" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-client-classrooms"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-client-classrooms"></code></pre>
</div>
<div id="execution-error-POSTapi-client-classrooms" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-client-classrooms"></code></pre>
</div>
<form id="form-POSTapi-client-classrooms" data-method="POST" data-path="api/client/classrooms" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-client-classrooms', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-client-classrooms" onclick="tryItOut('POSTapi-client-classrooms');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-client-classrooms" onclick="cancelTryOut('POSTapi-client-classrooms');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-client-classrooms" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/client/classrooms</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>class_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="class_name" data-endpoint="POSTapi-client-classrooms" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>start_year</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="start_year" data-endpoint="POSTapi-client-classrooms" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="code" data-endpoint="POSTapi-client-classrooms" data-component="body" required  hidden>
<br>

</p>

</form>


## api/client/classrooms




> Example request:

```bash
curl -X PATCH \
    "http://localhost/api/client/classrooms" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"class_id":9}'

```

```javascript
const url = new URL(
    "http://localhost/api/client/classrooms"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "class_id": 9
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PATCHapi-client-classrooms" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-client-classrooms"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-client-classrooms"></code></pre>
</div>
<div id="execution-error-PATCHapi-client-classrooms" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-client-classrooms"></code></pre>
</div>
<form id="form-PATCHapi-client-classrooms" data-method="PATCH" data-path="api/client/classrooms" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-client-classrooms', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-client-classrooms" onclick="tryItOut('PATCHapi-client-classrooms');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-client-classrooms" onclick="cancelTryOut('PATCHapi-client-classrooms');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-client-classrooms" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/client/classrooms</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>class_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="class_id" data-endpoint="PATCHapi-client-classrooms" data-component="body" required  hidden>
<br>

</p>

</form>


## api/client/transcripts/get-all




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/client/transcripts/get-all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/client/transcripts/get-all"
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
<div id="execution-results-GETapi-client-transcripts-get-all" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-client-transcripts-get-all"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-client-transcripts-get-all"></code></pre>
</div>
<div id="execution-error-GETapi-client-transcripts-get-all" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-client-transcripts-get-all"></code></pre>
</div>
<form id="form-GETapi-client-transcripts-get-all" data-method="GET" data-path="api/client/transcripts/get-all" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-client-transcripts-get-all', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-client-transcripts-get-all" onclick="tryItOut('GETapi-client-transcripts-get-all');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-client-transcripts-get-all" onclick="cancelTryOut('GETapi-client-transcripts-get-all');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-client-transcripts-get-all" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/client/transcripts/get-all</code></b>
</p>
</form>


## api/client/transcripts/get-by-student-code




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/client/transcripts/get-by-student-code" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"student_code":"ipsam"}'

```

```javascript
const url = new URL(
    "http://localhost/api/client/transcripts/get-by-student-code"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "student_code": "ipsam"
}

fetch(url, {
    method: "GET",
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
<div id="execution-results-GETapi-client-transcripts-get-by-student-code" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-client-transcripts-get-by-student-code"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-client-transcripts-get-by-student-code"></code></pre>
</div>
<div id="execution-error-GETapi-client-transcripts-get-by-student-code" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-client-transcripts-get-by-student-code"></code></pre>
</div>
<form id="form-GETapi-client-transcripts-get-by-student-code" data-method="GET" data-path="api/client/transcripts/get-by-student-code" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-client-transcripts-get-by-student-code', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-client-transcripts-get-by-student-code" onclick="tryItOut('GETapi-client-transcripts-get-by-student-code');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-client-transcripts-get-by-student-code" onclick="cancelTryOut('GETapi-client-transcripts-get-by-student-code');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-client-transcripts-get-by-student-code" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/client/transcripts/get-by-student-code</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>student_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="student_code" data-endpoint="GETapi-client-transcripts-get-by-student-code" data-component="body" required  hidden>
<br>

</p>

</form>


## api/client/transcripts/get-by-trxid




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/client/transcripts/get-by-trxid" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"trxID":"rem"}'

```

```javascript
const url = new URL(
    "http://localhost/api/client/transcripts/get-by-trxid"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "trxID": "rem"
}

fetch(url, {
    method: "GET",
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
<div id="execution-results-GETapi-client-transcripts-get-by-trxid" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-client-transcripts-get-by-trxid"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-client-transcripts-get-by-trxid"></code></pre>
</div>
<div id="execution-error-GETapi-client-transcripts-get-by-trxid" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-client-transcripts-get-by-trxid"></code></pre>
</div>
<form id="form-GETapi-client-transcripts-get-by-trxid" data-method="GET" data-path="api/client/transcripts/get-by-trxid" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-client-transcripts-get-by-trxid', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-client-transcripts-get-by-trxid" onclick="tryItOut('GETapi-client-transcripts-get-by-trxid');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-client-transcripts-get-by-trxid" onclick="cancelTryOut('GETapi-client-transcripts-get-by-trxid');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-client-transcripts-get-by-trxid" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/client/transcripts/get-by-trxid</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>trxID</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="trxID" data-endpoint="GETapi-client-transcripts-get-by-trxid" data-component="body" required  hidden>
<br>

</p>

</form>


## api/client/transcripts/history




> Example request:

```bash
curl -X POST \
    "http://localhost/api/client/transcripts/history" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/client/transcripts/history"
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


<div id="execution-results-POSTapi-client-transcripts-history" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-client-transcripts-history"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-client-transcripts-history"></code></pre>
</div>
<div id="execution-error-POSTapi-client-transcripts-history" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-client-transcripts-history"></code></pre>
</div>
<form id="form-POSTapi-client-transcripts-history" data-method="POST" data-path="api/client/transcripts/history" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-client-transcripts-history', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-client-transcripts-history" onclick="tryItOut('POSTapi-client-transcripts-history');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-client-transcripts-history" onclick="cancelTryOut('POSTapi-client-transcripts-history');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-client-transcripts-history" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/client/transcripts/history</code></b>
</p>
</form>


## api/client/transcripts/submit




> Example request:

```bash
curl -X POST \
    "http://localhost/api/client/transcripts/submit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"class_id":16,"student_code":"non","student_name":"blanditiis","transcript":["minima"]}'

```

```javascript
const url = new URL(
    "http://localhost/api/client/transcripts/submit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "class_id": 16,
    "student_code": "non",
    "student_name": "blanditiis",
    "transcript": [
        "minima"
    ]
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-client-transcripts-submit" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-client-transcripts-submit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-client-transcripts-submit"></code></pre>
</div>
<div id="execution-error-POSTapi-client-transcripts-submit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-client-transcripts-submit"></code></pre>
</div>
<form id="form-POSTapi-client-transcripts-submit" data-method="POST" data-path="api/client/transcripts/submit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-client-transcripts-submit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-client-transcripts-submit" onclick="tryItOut('POSTapi-client-transcripts-submit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-client-transcripts-submit" onclick="cancelTryOut('POSTapi-client-transcripts-submit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-client-transcripts-submit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/client/transcripts/submit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>class_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="class_id" data-endpoint="POSTapi-client-transcripts-submit" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>student_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="student_code" data-endpoint="POSTapi-client-transcripts-submit" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>student_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="student_name" data-endpoint="POSTapi-client-transcripts-submit" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>transcript</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
<input type="text" name="transcript.0" data-endpoint="POSTapi-client-transcripts-submit" data-component="body" required  hidden>
<input type="text" name="transcript.1" data-endpoint="POSTapi-client-transcripts-submit" data-component="body" hidden>
<br>

</p>

</form>


## api/client/transcripts/update




> Example request:

```bash
curl -X PATCH \
    "http://localhost/api/client/transcripts/update" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"class_id":17,"student_code":"accusamus","student_name":"tenetur","transcript":["omnis"]}'

```

```javascript
const url = new URL(
    "http://localhost/api/client/transcripts/update"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "class_id": 17,
    "student_code": "accusamus",
    "student_name": "tenetur",
    "transcript": [
        "omnis"
    ]
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PATCHapi-client-transcripts-update" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-client-transcripts-update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-client-transcripts-update"></code></pre>
</div>
<div id="execution-error-PATCHapi-client-transcripts-update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-client-transcripts-update"></code></pre>
</div>
<form id="form-PATCHapi-client-transcripts-update" data-method="PATCH" data-path="api/client/transcripts/update" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-client-transcripts-update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-client-transcripts-update" onclick="tryItOut('PATCHapi-client-transcripts-update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-client-transcripts-update" onclick="cancelTryOut('PATCHapi-client-transcripts-update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-client-transcripts-update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/client/transcripts/update</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>class_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="class_id" data-endpoint="PATCHapi-client-transcripts-update" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>student_code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="student_code" data-endpoint="PATCHapi-client-transcripts-update" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>student_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="student_name" data-endpoint="PATCHapi-client-transcripts-update" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>transcript</code></b>&nbsp;&nbsp;<small>string[]</small>  &nbsp;
<input type="text" name="transcript.0" data-endpoint="PATCHapi-client-transcripts-update" data-component="body" required  hidden>
<input type="text" name="transcript.1" data-endpoint="PATCHapi-client-transcripts-update" data-component="body" hidden>
<br>

</p>

</form>


## api/client/queue-transcripts




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/client/queue-transcripts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/client/queue-transcripts"
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
<div id="execution-results-GETapi-client-queue-transcripts" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-client-queue-transcripts"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-client-queue-transcripts"></code></pre>
</div>
<div id="execution-error-GETapi-client-queue-transcripts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-client-queue-transcripts"></code></pre>
</div>
<form id="form-GETapi-client-queue-transcripts" data-method="GET" data-path="api/client/queue-transcripts" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-client-queue-transcripts', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-client-queue-transcripts" onclick="tryItOut('GETapi-client-queue-transcripts');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-client-queue-transcripts" onclick="cancelTryOut('GETapi-client-queue-transcripts');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-client-queue-transcripts" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/client/queue-transcripts</code></b>
</p>
</form>


## api/client/queue-transcripts/approve




> Example request:

```bash
curl -X POST \
    "http://localhost/api/client/queue-transcripts/approve" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"queue_id":"sint"}'

```

```javascript
const url = new URL(
    "http://localhost/api/client/queue-transcripts/approve"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "queue_id": "sint"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-client-queue-transcripts-approve" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-client-queue-transcripts-approve"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-client-queue-transcripts-approve"></code></pre>
</div>
<div id="execution-error-POSTapi-client-queue-transcripts-approve" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-client-queue-transcripts-approve"></code></pre>
</div>
<form id="form-POSTapi-client-queue-transcripts-approve" data-method="POST" data-path="api/client/queue-transcripts/approve" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-client-queue-transcripts-approve', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-client-queue-transcripts-approve" onclick="tryItOut('POSTapi-client-queue-transcripts-approve');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-client-queue-transcripts-approve" onclick="cancelTryOut('POSTapi-client-queue-transcripts-approve');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-client-queue-transcripts-approve" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/client/queue-transcripts/approve</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>queue_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="queue_id" data-endpoint="POSTapi-client-queue-transcripts-approve" data-component="body" required  hidden>
<br>

</p>

</form>


## api/client/roles




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/client/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/client/roles"
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
<div id="execution-results-GETapi-client-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-client-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-client-roles"></code></pre>
</div>
<div id="execution-error-GETapi-client-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-client-roles"></code></pre>
</div>
<form id="form-GETapi-client-roles" data-method="GET" data-path="api/client/roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-client-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-client-roles" onclick="tryItOut('GETapi-client-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-client-roles" onclick="cancelTryOut('GETapi-client-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-client-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/client/roles</code></b>
</p>
</form>


## api/client/roles




> Example request:

```bash
curl -X POST \
    "http://localhost/api/client/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"autem"}'

```

```javascript
const url = new URL(
    "http://localhost/api/client/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "autem"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-client-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-client-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-client-roles"></code></pre>
</div>
<div id="execution-error-POSTapi-client-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-client-roles"></code></pre>
</div>
<form id="form-POSTapi-client-roles" data-method="POST" data-path="api/client/roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-client-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-client-roles" onclick="tryItOut('POSTapi-client-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-client-roles" onclick="cancelTryOut('POSTapi-client-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-client-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/client/roles</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-client-roles" data-component="body" required  hidden>
<br>

</p>

</form>


## api/client/roles




> Example request:

```bash
curl -X PATCH \
    "http://localhost/api/client/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"role_id":20,"name":"tenetur"}'

```

```javascript
const url = new URL(
    "http://localhost/api/client/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "role_id": 20,
    "name": "tenetur"
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PATCHapi-client-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-client-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-client-roles"></code></pre>
</div>
<div id="execution-error-PATCHapi-client-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-client-roles"></code></pre>
</div>
<form id="form-PATCHapi-client-roles" data-method="PATCH" data-path="api/client/roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-client-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-client-roles" onclick="tryItOut('PATCHapi-client-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-client-roles" onclick="cancelTryOut('PATCHapi-client-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-client-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/client/roles</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>role_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="role_id" data-endpoint="PATCHapi-client-roles" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PATCHapi-client-roles" data-component="body" required  hidden>
<br>

</p>

</form>


## api/client/roles




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/client/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"role_id":1}'

```

```javascript
const url = new URL(
    "http://localhost/api/client/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "role_id": 1
}

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-client-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-client-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-client-roles"></code></pre>
</div>
<div id="execution-error-DELETEapi-client-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-client-roles"></code></pre>
</div>
<form id="form-DELETEapi-client-roles" data-method="DELETE" data-path="api/client/roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-client-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-client-roles" onclick="tryItOut('DELETEapi-client-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-client-roles" onclick="cancelTryOut('DELETEapi-client-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-client-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/client/roles</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>role_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="role_id" data-endpoint="DELETEapi-client-roles" data-component="body" required  hidden>
<br>

</p>

</form>



