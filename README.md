# Kntnt's posts shortcode

Provides shortcode that lists posts (and other content types).

## Description

The shortcode `[posts …]` with up to four arguments output an unordered lists with titles linked to posts (or other post type).

### Some examples

The shortcode `[posts]` outputs a list with all posts ordered by date in descending order.

The shortcode `[posts 10]` outputs a list with ten posts ordered by date in descending order.

The shortcode `[posts 10 title]` outputs a list with ten posts ordered by title in ascending order.

The shortcode `[posts 10 date ASC]` outputs a list with ten posts ordered by date in ascending order.

The shortcode `[posts 10 title DESC]` outputs a list with ten posts ordered by date in descending order.

The shortcode `[posts 10 title ASC page]` outputs a list with ten pages ordered by title in ascending order.

The shortcode `[posts post_type="page"]` outputs a list with all pages ordered by date in descending order.

The shortcode `[posts 10 post_type="page"]` outputs a list with ten pages ordered by date in descending order.

### Detailed description

The shortcode `[posts …]` takes up to four arguments. The arguments can be given either in the format `key="value"` or just as `value`. The order of the arguments is important in the latter case. The arguments in order are:

1. `limit="…"` where `…` is the number of posts to output. If omitted or empty, all posts are included.
2. `type="…"` where `…` is either `date` for sorting by date or `title` for sorting by title. If omitted, `date` is used.
3. `order="…"` where `…` is either `ASC` for ascending sort order or `DESC` for descending sort order. If omitted, descending sort order is used when `type="date"` and ascending sort order is used for `type="title"`.
4. `post_type="…"` where "…" is the machine readable name (i.e. *slug*) of the [post type](https://codex.wordpress.org/Post_Types) to be listed. If omitted, `post` is used.

## Installation

Install the plugin [the usually way](https://codex.wordpress.org/Managing_Plugins#Installing_Plugins).

## Frequently Asked Questions

### Where is the setting page?

There is no setting page.

### How can I get help?

If you have a questions about the plugin, and cannot find an answer here, start by looking at [issues](https://github.com/Kntnt/kntnt-posts-shortcode/issues) and [pull requests](https://github.com/Kntnt/kntnt-posts-shortcode/pulls). If you still cannot find the answer, feel free to ask in the the plugin's [issue tracker](https://github.com/Kntnt/kntnt-posts-shortcode/issues) at Github.

### How can I report a bug?

If you have found a potential bug, please report it on the plugin's [issue tracker](https://github.com/Kntnt/kntnt-posts-shortcode/issues) at Github.

### How can I contribute?

Contributions to the code or documentation are much appreciated.

If you are unfamiliar with Git, please post it as a new issue on the plugin's [issue tracker](https://github.com/Kntnt/kntnt-posts-shortcode/issues) at Github.

If you are familiar with Git, please do a pull request.

## Changelog

### 1.0.0

Initial release. Fully functional plugin.
