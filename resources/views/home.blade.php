@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome to the system!')  }}

                

                 
                    <div class="col-md-8">
                        <label for="exampleFormControlInput1" class="form-label">Now enter your chasis request</label>
                        <input type="text" class="form-control text-uppercase" id="exampleFormControlInput1" placeholder="5KBRL6860HOB90095">
                    </div>
                    <div class="col-md-8 mt-3">
                        <button class="btn btn-primary mb-3" id="chasis_request_token">Confirm chasis</button>
                    </div>
            
                </div>


            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    const step1 = document.getElementById("chasis_request_token");
    const Bearer_token = null;

    step1?.addEventListener("click", () => {
        solicitar_token();

        Bearer_token?.consultar_chasis(Bearer_token);
 
    })

    async function solicitar_token() {
        var myHeaders = new Headers();
        myHeaders.append("client_id", "4cc16ff5a6924dc7a7b8af5d5bb87fb7");
        myHeaders.append("clientsecret", "2a195db7afe042fb8f301b264bfb766749808777511f6acf2d64ddd89899573302554ed");
        myHeaders.append("user", "formdigi");
        myHeaders.append("password", "A%h4g7#jK");
        myHeaders.append("Cookie", "ASP.NET_SessionId=pd5fdgjuulsvwjnx2zuryzju");

        var requestOptions = {
        method: 'GET',
        headers: myHeaders,
        redirect: 'follow'
        };

        fetch("https://eskemacloud.hondapanama.com/wsservicestest/authv2/access_token", requestOptions)
        .then(response => response.text())
        .then(result => Bearer_token = result)
        .catch(error => console.log('error', error));
    }

    async function consultar_chasis(e) {
        var myHeaders = new Headers();
        myHeaders.append("Authorization", `Bearer ${e}`);
        myHeaders.append("Content-Type", "application/json");
        myHeaders.append("Cookie", "ASP.NET_SessionId=pd5fdgjuulsvwjnx2zuryzju");

        var raw = JSON.stringify({
        "ciacod": "01",
        "chasis": "5KBRL6860HOB90095"
        });

        var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: raw,
        redirect: 'follow'
        };

        fetch("https://eskemacloud.hondapanama.com/wsservicestest/api/formautos/consultachasis", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));
    }


</script>
@endsection

<?php
require_once 'HTTP/Request2.php';
$request = new HTTP_Request2();
$request->setUrl('https://eskemacloud.hondapanama.com/wsservicestest/api/formautos/consultachasis');
$request->setMethod(HTTP_Request2::METHOD_POST);
$request->setConfig(array(
  'follow_redirects' => TRUE
));
$request->setHeader(array(
  'Authorization' => 'Bearer 2d8ced44-e938-4cd9-9325-1be23ecc3a5f!a542d0389057dd9516d73a62dab8ffc8889106ad80cb078c8d6d8fd1d46ad5053c4ee391f0e850',
  'Content-Type' => 'application/json',
  'Cookie' => 'ASP.NET_SessionId=pd5fdgjuulsvwjnx2zuryzju'
));
$request->setBody('{"ciacod":"01","chasis":"5KBRL6860HOB90095"}');
try {
  $response = $request->send();
  if ($response->getStatus() == 200) {
    echo $response->getBody();
  }
  else {
    echo 'Unexpected HTTP status: ' . $response->getStatus() . ' ' .
    $response->getReasonPhrase();
  }
}
catch(HTTP_Request2_Exception $e) {
  echo 'Error: ' . $e->getMessage();
}