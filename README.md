# webservco/jsonapi

A PHP component/library. Please see [webservco/sandbox](https://webservco.github.io/sandbox/) for an example project using these types of components.

Interfaces for building [JSON:API](https://jsonapi.org/) documents, plus the jsonapi member object.

- Related: `webservco/jsonapi-application` (request handling, views and the request service implementation), `webservco/view` (`JSONAPIRenderer`)

---

## Installation

```shell
composer require webservco/jsonapi
```

---

## Usage

Your resource objects implement these interfaces. The renderer encodes public properties, and their names become the JSON member names.

```php
use WebServCo\JSONAPI\Contract\Document\DataInterface;
use WebServCo\JSONAPI\Contract\Document\MetaInterface;

final readonly class ItemData implements DataInterface
{
    public string $type;

    public function __construct(public int $id, public ItemAttributes $attributes, public ?MetaInterface $meta)
    {
        $this->type = 'item';
    }
}
```

Put it in a document view (`ItemView` or `CollectionView` from `webservco/jsonapi-application`) together with the `jsonapi` member:

```php
use WebServCo\JSONAPI\DataTransfer\Document\JSONAPI;

// {"jsonapi": {"version": "1.1"}, "data": {...}}
$view = new ItemView(new JSONAPI('1.1'), $itemData, null, $documentMeta);
```

---

## Contracts

| Interface | Implementation | Purpose |
| --- | --- | --- |
| `Contract\Document\JSONAPIInterface` | `DataTransfer\Document\JSONAPI` | The `jsonapi` member, and the `application/vnd.api+json` media type constant. |
| `Contract\Document\DataInterface` | yours | Primary data of a document. |
| `Contract\Data\ItemInterface` | yours | One item in a collection. |
| `Contract\Document\MetaInterface` | yours | A `meta` object. |
| `Contract\Errors\ErrorInterface` | `DefaultError` (`webservco/jsonapi-application`) | An entry in `errors`. |
| `Contract\Service\JSONAPIRequestServiceInterface` | `JSONAPIRequestService` (`webservco/jsonapi-application`) | Checks content type and version, decodes the body. |

Namespaces are relative to `WebServCo\JSONAPI\`.

---

## Development

```shell
# Start project.
ddev start
# Install dependencies.
ddev c u
# Run all validations.
ddev c c
# Run unit tests.
ddev c test:dox
```

---

## License

[MIT](LICENSE.md)
