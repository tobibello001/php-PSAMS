<?php
require __DIR__ . "/../inc/bootstrap.php";

$user = findStudentByMatricNo(request()->request->get('matricNo'));

if (empty($user)) {
    echo "bad user";
    redirect('../login.php');
}

if (!password_verify(request()->request->get('password'), $user['user_password'])) {
    echo "bad password";
    redirect('../login.php');
}

$expTime = time() + 3600;

$jwt = \Firebase\JWT\JWT::encode([
    'iss' => request()->getBaseUrl(),
    'sub' => "{$user['matric_number']}",
    'exp' => $expTime,
    'iat' => time(),
    'nbf' => time(),
    'is_admin' => $user['role_id'] == 1
], getenv("SECRET_KEY"));

$accessToken = new Symfony\Component\HttpFoundation\Cookie(
    "access_token", $jwt, $expTime, '/', getenv("COOKIE_DOMAIN"));

redirect("/", ['cookies' => [$accessToken]]);