# mediawiki-InfoboxBuilder
 Port of Fandom's https://github.com/Wikia/app/tree/dev/extensions/wikia/InfoboxBuilder extension to the MediaWiki 1.29+

## Installation
<b>Requires extension Scribunto: https://www.mediawiki.org/wiki/Extension:Scribunto</b>

Grab the latest release from <a href="https://github.com/AlexandrEfremov/mediawiki-InfoboxBuilder/releases/latest">GitHub</a> and unpack it into <code>extensions\InfoboxBuilder</code> directory in your MediaWiki installation or clone this repository, by using these commands:
```bash
cd extensions
git clone https://github.com/AlexandrEfremov/mediawiki-InfoboxBuilder.git InfoboxBuilder --branch master --depth 1
```
and add the following code at the bottom of [LocalSettings.php](https://www.mediawiki.org/wiki/Manual:LocalSettings.php):
```php
wfLoadExtension( 'InfoboxBuilder' );
```
## Usage
See: https://dev.fandom.com/wiki/Lua_templating/InfoboxBuilder
