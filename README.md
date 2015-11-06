# PHP Translation Class

Single-file php class to help building multilingual websites.

Features:  

- client language autodetection
- all in a single fully docummented file
- allows passing variables to the messages
- allows to force a different language for an specific block of the site
- loads language data only once and only if needed - no memory waste
- full-static class with methods to customize settings

Author: [Victor Nogueira](https://github.com/felladrin)

Copyright: Copyright © 2015 Interativa Digital

License: The MIT License (MIT)

## Usage

Consider you have the following file structure:

    ├── lib
        ├── php-translation-class
            ├── Translation.php
    ├── locales
        ├── en-US.php
        ├── es-ES.php
        ├── pt-BR.php
    ├── index.php

So, if you want to use the translation class on your index.php, you should do the following:

Request the script on the top of the file you'll use it:

    require_once __DIR__ . '/lib/php-translation-class/Translation.php';

Below that line, define the namespace to use:

    use Translation\Translation;
    
Now you are ready to use the translation class. It's as simple as that:

    <?= Translation::of('greetings'); ?>
    
See? You just need to indicate the keyword for a string from the locales files, and voilá! The string will appear on the language of the visitors browser if the locale is available. Otherwise, it shows the string from the default language.

You can also pass variables to the translation strings, like this:

    <?= Translation::of('greetings', ['username' => $username, 'email' => $userEmail]); ?>
    
And you can use any valid character for the keywords on the locale files, so you can, for example, use dots to organize the translations, and then you could use it like that:

    <?= Translation::of('home.welcome'); ?>
    <?= Translation::of('home.title'); ?>
    <?= Translation::of('home.subtitle'); ?>
    <?= Translation::of('home.subtitle.quote', ['quote' => $quoteOfTheDay, 'author' => $quoteAuthor]); ?>
    <?= Translation::of('home.subtitle.time', ['time' => date("F j, Y, g:i a")]); ?>
