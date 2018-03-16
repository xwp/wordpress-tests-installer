# WordPress Tests Installer

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![Packagist](https://img.shields.io/packagist/dt/xwp/wordpress-tests-installer.svg)](https://packagist.org/packages/xwp/wordpress-tests-installer)
![GitHub tag](https://img.shields.io/github/tag/xwp/wordpress-core-installer.svg)

A custom Composer plugin to install the WordPress Core PHPUnit test suite inside the `vendor` directory.

### Usage
To add the WordPress Core PHPUnit test suite, add the following to your package's composer file:

```
"require": {
	"xwp/wordpress-tests-installer": "dev-master"
}
```

If you require a specific WordPress Core version, other than the latest stable release, you'll need to create a `.env` file in the root of your project and add the following:

```
WP_VERSION=4.9.4
```

When used with Travis CI you will need to add the environment variable to the [config file](https://docs.travis-ci.com/user/environment-variables/) or through the [web UI](https://docs.travis-ci.com/user/environment-variables/#Defining-Variables-in-Repository-Settings).

### License
This code is licensed under the [MIT license](https://github.com/xwp/wordpress-tests-installer/blob/master/LICENSE.md).