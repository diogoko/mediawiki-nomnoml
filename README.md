# mediawiki-nomnoml

mediawiki-nomnoml is a [MediaWiki extension](https://www.mediawiki.org/wiki/Manual:Extensions) that provides a new tag (`<nomnoml>`) to display UML diagrams. It's based on the amazing [nomnoml](http://www.nomnoml.com/) drawing tool.

## Instalation

Clone this repo or download it as a ZIP archive.

Copy the `Nomnoml` directory to Mediawiki's `extensions/` directory.

Add the following code to `LocalSettings.php`:

```php
require_once "$IP/extensions/Nomnoml/Nomnoml.php";
```

## Usage

Simply use the `<nomnoml>` tag in your articles:

```
<nomnoml>
  [<frame>Decorator pattern|
    [<abstract>Component||+ operation()]
    [Client] depends --> [Component]
    [Decorator|- next: Component]
    [Decorator] decorates -- [ConcreteComponent]
    [Component] <:- [Decorator]
    [Component] <:- [ConcreteComponent]
  ]
</nomnoml>
```

## License

mediawiki-nomnoml is MIT licensed.
