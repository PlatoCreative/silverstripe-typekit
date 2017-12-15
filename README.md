# SS4 unsupport
This module will not be updated to SS4.  We recommend using [silverstripe webfonts](https://github.com/gorriecoe/silverstripe-webfonts).

# TypeKit Module

## Overview

Provide TypeKit integration for SilverStripe CMS allowing fonts inside HTMLEditorField and frontend.

## Requirements

- silverstripe/cms ^3.2
- silverstripe/framework ^3.2

## Installation

Run the following to add this module as a requirement and install it via composer.

```
$ composer require plato-creative/silverstripe-typekit
```

Add your typekit ID to your config.yml.

```
TypeKit:
  typekitID: ######
```

## Usage

The module provides a global template variable `$TypeKit` that can be used to insert the kit code into any
page template.

``` html
<head>
    <title>Example.com</title>
    $TypeKit
</head>
```

## Maintainers
 * Web Team <web@PlatoCreative.co.nz>

## Bugtracker
Bugs are tracked in the issues section of this repository. Before submitting an issue please read over
existing issues to ensure yours is unique.

If the issue does look like a new bug:

 - Create a new issue
 - Describe the steps required to reproduce your issue, and the expected outcome. Unit tests, screenshots
 and screencasts can help here.
 - Describe your environment as detailed as possible: SilverStripe version, Browser, PHP version,
 Operating System, any installed SilverStripe modules.

Please report security issues to the module maintainers directly. Please don't file security issues in the bugtracker.

## Development and contribution
If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.
