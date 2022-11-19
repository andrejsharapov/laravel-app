# Laravel App

Backend Learning

[![php -v](https://img.shields.io/badge/php-7.4-7377ad)](https://www.php.net/manual/en/langref.php)
[![laravel -v](https://img.shields.io/badge/laravel-8-df5b4b)](https://laravel.com/docs/8.x)
[![blade docs](https://img.shields.io/badge/blade-docs-e31c1c)](https://laravel.com/docs/8.x/blade)
[![vscode github](https://img.shields.io/badge/github-dev-000000?logo=github)](https://github.dev/andrejsharapov/laravel-app)

## Table of Contents

- [Laravel App](#laravel-app)
  - [Table of Contents](#table-of-contents)
  - [List of topics](#list-of-topics)
  - [Commit messages](#commit-messages)
    - [Examples](#examples)
  - [Comments](#comments)
  - [Software](#software)
  - [Command helper](#command-helper)
    - [Create controller](#create-controller)
    - [Create model + migration](#create-model--migration)
    - [Create seed](#create-seed)

## List of topics

- [x] PHP base
- [x] SQL (MySQL, PostgreSQL, DBeaver)
- [x] Linux base
- [x] ООП
- [ ] MVC (Model-View-Controller)
- [ ] DB
- [ ] PHP advanced
- [ ] Auth
- [ ] Linux advanced
- [ ] Docker
- [ ] Laravel

## Commit messages

> This is adapted
> from [Angular's commit convention](https://github.com/conventional-changelog/conventional-changelog/tree/master/packages/conventional-changelog-angular)
> .

Messages must be matched by the following regex:

```js
/^(revert: )?(build|chore|ci|deps|docs|feat|fix|perf|refactor|release|test|types|wip|workflow|workspace)(\(.+\))?: .{1,50}/;
```

<details>
  <summary>Explanation</summary>

|          On/Off          | Message   | Description                                                   |
| :----------------------: | --------- | :------------------------------------------------------------ |
| <ul><li>- [ ] </li></ul> | build     | Changes that affect the build system or external dependencies |
| <ul><li>- [x] </li></ul> | chore     | Chore development                                             |
| <ul><li>- [x] </li></ul> | ci        | Changes to our CI configuration files and scripts             |
| <ul><li>- [ ] </li></ul> | deps      | Dependencies                                                  |
| <ul><li>- [x] </li></ul> | docs      | Documentation only changes                                    |
| <ul><li>- [x] </li></ul> | feat      | A new feature                                                 |
| <ul><li>- [x] </li></ul> | fix       | A bug fix                                                     |
| <ul><li>- [x] </li></ul> | perf      | A code change that improves performance                       |
| <ul><li>- [x] </li></ul> | refactor  | A code change that neither fixes a bug nor adds a feature     |
| <ul><li>- [ ] </li></ul> | release   | Start or prepare for a new release                            |
| <ul><li>- [x] </li></ul> | test      | Adding missing tests or correcting existing tests             |
| <ul><li>- [ ] </li></ul> | types     | Types                                                         |
| <ul><li>- [x] </li></ul> | wip       | Work in progress                                              |
| <ul><li>- [x] </li></ul> | workflow  | Workflow                                                      |
| <ul><li>- [x] </li></ul> | workspace | Workspace changes                                             |

</details>

### Examples

```apache
  # started a new
  chore(refactor): start a new module
  feat: open/start a new block
```

```apache
  # styles
  chore(style): update styles
  style: bringing to a unified style
```

```apache
  # content
  chore(test): need fill in the content
  test: prepared content for filling
  job(doc): filled in the content for task $
  test(wip): content and tasks requiring attention
```

## Comments

```php
<?php

//======================================================================
// CATEGORY LARGE FONT
//======================================================================

//-----------------------------------------------------
// Sub-Category Smaller Font
//-----------------------------------------------------

/* Title Here Notice the First Letters are Capitalized */

# Option 1
# Option 2
# Option 3

/**
 * This is a detailed explanation
 * of something that should require
 * several paragraphs of information.
 *
 * @param string $var
 * @param boolean $var
 *
 * @return array | string | boolean
 */

// This is a single line quote.
?>
```

More info
to [phpDocumentor](https://manual.phpdoc.org/HTMLSmartyConverter/HandS/phpDocumentor/tutorial_phpDocumentor.quickstart.pkg.html)
| [Example](https://manual.phpdoc.org/HTMLSmartyConverter/HandS/phpDocumentor/tutorial_sample2.pkg.html).

## Software

- OpenServer
- MySQL
- PostgreSQL
- DBeaver
- PhpStorm

<!--
- Visual Studio Code
    - SQLTools
    - SQL Formatter
    - SQLTools PostgreSQL
    - Comment Anchors
-->

## Command helper

<details>
<summary>Commands</summary>

```bash
# -> show commands:
$ php artisan
```

### Create controller

```bash
$ php artisan make:controller NameController
# output in app/Http/Controllers
```

### Create model + migration

```bash
$ php artisan make:model NameModel -m
# output:
#   model     in app/Models/
#   migration in database/migrations/
$ php artisan migrate
```

### Create seed

```bash
php artisan make:seeder NameSeeder
```

</details>

<p align="center">
<a href="#laravel-app" title="">To top</a>
</p>
