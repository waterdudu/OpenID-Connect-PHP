<?php

/**
 *
 * Copyright MITRE 2012
 *
 * OpenIDConnectClient for PHP5
 * Author: Michael Jett <mjett@mitre.org>
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 *
 */

<?php

require "./vendor/autoload.php";


// issuer, client_id, client_secret
$oidc = new OpenIDConnectClient('http://127.0.0.1:5556',
                                '0FaVkMkVhjiySM3ZdgR5BpYKy91c4QEb1urF6Kqf3sY=@example.dudu.me',
                                'FkVl5Ym-LDdxuRw6mdg-3M-9YFUB3NjNDd-zx2MxerAxgF3WMM2R3FZaNuB1PpSNAD9N61soZxDhEF3W6sxjx7PdCs6_lSer');

$oidc->addScope(array("openid", "email", "profile"));
$isAuth = $oidc->authenticate();


$access_token = $oidc->getAccessToken();

$email = $oidc->getUserEmail();

$userID = $oidc->getUserID();

?>


<html>
<head>
    <title>Example OpenID Connect Client Use</title>
    <style>
        body {
            font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
        }
    </style>
</head>
<body>

    <div>
        Hello ~ <b><?php echo $email ?></b><br>

        <b>access token :</b> <?php echo $access_token ?><br>
        <b>email :</b> <?php echo $email ?><br>
        <b>user id :</b> <?php echo $userID ?>

    </div>

</body>
</html>




