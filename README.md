# Hybrid\Pagination

Hybrid Pagination is a fork of the core WordPress `paginate_links()` function to give theme authors full control over the output of their pagination. Unfortunately, core doesn't give theme authors much flexibility for altering the markup and classes. This class is meant to solve this issue. It also standardizes the pagination used for posts, singular (multi-page) posts, and comments.

## Requirements

* WordPress 7.0+.
* PHP 8.2+.
* [Composer](https://getcomposer.org/) for managing PHP dependencies.

## Registration

Register the service provider with your application:

```php
$app->register( \Hybrid\Pagination\Provider::class );
```

This binds `Hybrid\Pagination\Contracts\Pagination` to `Hybrid\Pagination\Pagination` in the
container. Because it's bound to the contract rather than the concrete class, you can swap in
your own implementation by binding your own class to the same contract before this provider
registers.

## Usage

Three contexts are supported out of the box: `posts` (the main loop), `post` (singular,
multi-page posts split with `<!--nextpage-->`), and `comments`. Each context pulls its own
sensible defaults (base URL, current page, total pages) from WordPress — you only need to pass
`$args` to override markup or behavior.

### Template tags

The package ships procedural helpers for use directly in theme templates:

```php
use function Hybrid\Pagination\display;
use function Hybrid\Pagination\render;
use function Hybrid\Pagination\pagination;

// Echoes the pagination markup.
display( 'posts' );

// Returns the pagination markup as a string.
$html = render( 'posts' );

// Returns the underlying Pagination object, letting you inspect it before output.
pagination( 'posts' )->make()->display();
```

`display()` and `render()` are shorthand for `pagination( $context, $args )->make()->display()`
and `->make()->render()` respectively — `make()` builds the `$items` array, `display()`/`render()`
turn it into markup.

### Resolving from the container

```php
use Hybrid\Pagination\Contracts\Pagination;

$pagination = app( Pagination::class, [
    'context' => 'posts',
    'args'    => [],
] );

$pagination->make()->display();
```

### Contexts

```php
// Main loop pagination.
display( 'posts' );

// Singular, multi-page post pagination (`<!--nextpage-->`).
display( 'post' ); // `singular` is also accepted as an alias for `post`.

// Comment pagination.
display( 'comments' );
```

### Common arguments

```php
display( 'posts', [
    'mid_size'           => 2,
    'end_size'           => 1,
    'prev_text'          => __( 'Previous', 'my-theme' ),
    'next_text'          => __( 'Next', 'my-theme' ),
    'screen_reader_text' => __( 'Posts navigation', 'my-theme' ),
] );
```

Any argument accepted by core's `paginate_links()` is supported, alongside the following
additions for controlling markup and classes:

| Argument           | Default                                       | Description                              |
|---------------------|------------------------------------------------|-------------------------------------------|
| `container_tag`     | `nav`                                          | Wrapping element tag.                     |
| `container_class`   | `pagination pagination--%s`                    | Wrapping element class (`%s` = context).  |
| `title_tag`         | `h2`                                           | Title element tag.                        |
| `title_class`       | `pagination__title screen-reader-text`         | Title element class.                      |
| `title_text`        | `''`                                           | Title text; title is omitted if empty.    |
| `list_tag`          | `ul`                                           | List element tag.                         |
| `list_class`        | `pagination__items`                            | List element class.                       |
| `item_tag`          | `li`                                           | Item element tag.                         |
| `item_class`        | `pagination__item pagination__item--%s`        | Item element class (`%s` = item type).    |
| `anchor_class`      | `pagination__anchor pagination__anchor--%s`    | Link/span class (`%s` = item type).       |

Item types used for the `%s` placeholders above: `link`, `current`, `dots`, `prev`, `next`.

### Filters

```php
// Filter default args for a given context, before user args are merged in.
add_filter( 'hybrid/pagination/posts/defaults', function ( $defaults ) {
    return $defaults;
} );

// Filter the final, merged args for a given context.
add_filter( 'hybrid/pagination/posts/args', function ( $args ) {
    return $args;
} );

// Filter the final rendered markup for a given context.
add_filter( 'hybrid/pagination/posts', function ( $html, $args ) {
    return $html;
}, 10, 2 );

// Filter each built page link URL (also runs through core's `paginate_links` filter).
add_filter( 'paginate_links', function ( $link ) {
    return $link;
} );
```

Swap `posts` for `post` or `comments` to target those contexts specifically.

## Copyright and License

This project is licensed under the [GNU GPL](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html), version 2 or later.

2008&thinsp;&ndash;&thinsp;2026 &copy; [Theme Hybrid](https://themehybrid.com).
