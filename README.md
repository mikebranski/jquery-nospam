# jQuery No Spam Plugin

This jQuery plugin turns an obfuscated e-mail address into a human-readable one. To use this plugin, include `jquery.nospam.js` and call the nospam() method. No Spam automatically detects if your matched element is a link. If so, it checks the rel attributes for the obfuscated e-mail addresses. For all other elements, it uses the text between the matched tags.

Now supports multiple dots (.) both before and after the at (@) sign! (since 1.3)

## Options

    $('a.email').nospam({
        replaceText: true,    // BOOLEAN, optional default false. If set to true, replaces matched elements' text with the e-mail address
        filterLevel: 'normal' // STRING, optional accepts 'low' or 'normal', default 'normal'.
                              // low: email//domain/tld
                              // normal: dlt/niamod//liame (email//domain/tld reversed)
    });

## Example

### Link with fallback, replaceText: true
    <a class="email" href="contact.php" rel="moc/elpmaxe//oof">Contact us</a>
    <script>
    $('.email').nospam({
        replaceText: true
    });
    </script>

If JavaScript is enabled, the above code will render:

<mailto:foo@example.com>

However, if JavaScript is not enabled, the user will simply see a link to contact.php with the text 'Contact Us', providing a nice fallback:

[Contact us](contact.php)

### Link with fallback, filterLevel: 'low'
    <a class="email" href="contact.php" rel="foo//example/com">Contact us</a>
    <script>
    $('.email').nospam({
        filterLevel: 'low'
    });
    </script>

If JavaScript is enabled, the above code will render:

[Contact us](mailto:foo@example.com)

If JavaScript is not enabled, the user will simply see a link to contact.php like in the previous example:

[Contact us](contact.php)


### Link with fallback, replaceText: true
    <a class="email" href="contact.php" rel="moc/elpmaxe//oof">Contact us</a>
    <script>
    $('.email').nospam({
        replaceText: true
    });
    </script>

If JavaScript is enabled, the above code will render:

<mailto:foo@example.com>

However, if JavaScript is not enabled, the user will simply see a link to contact.php with the text 'Contact Us', providing a nice fallback:

[Contact us](contact.php)

### Span

You can also use No Spam with non-link elements. `replaceText` will also be `true` in this case.

    <span class="email">foo//example/com</span>
    <script>
    $('.email').nospam({
        filterLevel: 'low'
    });
    </script>

With JavaScript:

<mailto:foo@example.com>

Without JavaScript:

foo//example/com

## Integration

To make things easier, I also created a PHP function called nospam() that formats your regular e-mail addresses dynamically and outputs them in a No Spam-ready format which I've made [available for download](https://github.com/mikebranski/jquery-nospam/blob/master/nospam.phps).

## Changelog
* 1.3.2 - Wrap plugin in a closure for better compatibility with other libraries, clean up comments, create README
* 1.3.1 - Updated links in comments, removed GPL license file, tested against jQuery 1.6.2
* 1.3   - Added support for e-mail addresses with multiple dots (.) both before and after the at (@) sign
* 1.2.1 - Included GPL license
* 1.2   - Finalized name as No Spam (was Protect Email)
* 1.1   - Changed switch() to if() statement
* 1.0   - Initial release
