<?php
header ('Content-type: text/plain; charset=UTF-8');

require_once __DIR__ . '/../Translation.php';

use Translation\Translation;

echo Translation::of('presentation') . PHP_EOL;
echo Translation::of('user.login.message', ['name' => 'John Doe', 'email' => 'john@doe.com']) . PHP_EOL;
echo '-------' . PHP_EOL;

Translation::forceLanguage('es-ES');

echo Translation::of('presentation') . PHP_EOL;
echo Translation::of('user.login.message', ['name' => 'John Doe', 'email' => 'john@doe.com']) . PHP_EOL;
echo '-------' . PHP_EOL;

Translation::forceLanguage('pt-BR');

echo Translation::of('presentation') . PHP_EOL;
echo Translation::of('user.login.message', ['name' => 'John Doe', 'email' => 'john@doe.com']) . PHP_EOL;
echo '-------' . PHP_EOL;

Translation::forceLanguage('en-US');

echo Translation::of('presentation') . PHP_EOL;
echo Translation::of('user.login.message', ['name' => 'John Doe', 'email' => 'john@doe.com']) . PHP_EOL;
echo '-------' . PHP_EOL;

Translation::forceLanguage('ru-RU');

echo Translation::of('presentation') . PHP_EOL;
echo Translation::of('user.login.message', ['name' => 'John Doe', 'email' => 'john@doe.com']) . PHP_EOL;
echo '-------' . PHP_EOL;

Translation::forceLanguage(false);

echo Translation::of('presentation') . PHP_EOL;
echo Translation::of('user.login.message', ['name' => 'John Doe', 'email' => 'john@doe.com']) . PHP_EOL;
