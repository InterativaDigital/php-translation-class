<?php
header ('Content-type: text/html; charset=UTF-8');

require_once __DIR__ . '/../Translation.php';

use Translation\Translation;

echo Translation::of('presentation');
echo '<br/>';
echo Translation::of('user.login.message', ['nome' => 'John Doe', 'email' => 'john@doe.com']);
echo '<br/>-------<br/>';

Translation::forceLanguage('es-ES');

echo Translation::of('presentation');
echo '<br/>';
echo Translation::of('user.login.message', ['nome' => 'John Doe', 'email' => 'john@doe.com']);
echo '<br/>-------<br/>';

Translation::forceLanguage('pt-BR');

echo Translation::of('presentation');
echo '<br/>';
echo Translation::of('user.login.message', ['nome' => 'John Doe', 'email' => 'john@doe.com']);
echo '<br/>-------<br/>';

Translation::forceLanguage('en-US');

echo Translation::of('presentation');
echo '<br/>';
echo Translation::of('user.login.message', ['nome' => 'John Doe', 'email' => 'john@doe.com']);
echo '<br/>-------<br/>';

Translation::forceLanguage(false);

echo Translation::of('presentation');
echo '<br/>';
echo Translation::of('user.login.message', ['nome' => 'John Doe', 'email' => 'john@doe.com']);
