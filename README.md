# jahuty-php-example

An example Laravel application with [Jahuty's PHP SDK](https://github.com/jahuty/jahuty-php).

## Checking your environment

Before you get started, let's make sure you have the correct version of PHP and Composer.

Verify you have PHP 7.2.5+ installed:

```bash
$ php -v
```

The command above should produce the following output (or a higher version):

```bash
PHP 7.2.5...
```

Verify you have Composer [installed globally or locally](https://getcomposer.org/doc/00-intro.md).

If all of the above are true, you're ready to continue!

## Installing the application

Let's install the application (aka, "clone the repository") onto your local machine.

Change to your destination directory:

```bash
$ cd ~
```

Clone the repository into your destination directory:

```bash
~$ git clone https://github.com/jahuty/jahuty-php-example.git
```

This will create a `jahuty-php-example` directory in the current directory.

Change into the repository's root directory:

```bash
~$ cd jahuty-php-example
```

Now, you need to install the application's dependencies using composer.

If you've installed Composer globally on your machine:

```bash
~/jahuty-php-example $ composer install
```

If you've installed Composer locally in your project:

```bash
~/jahuty-php-example $ php composer.phar install
```

This will print a bunch of output to your screen as Composer installs the application's dependencies.

When it's done (and it may take a few minutes), you're ready to start the application!

## Starting the application

PHP and Laravel include a development server, and we'll use it to serve our application from your local machine.

Start the server from the repository's directory using Laravel's command line tool `artisan`:

```bash
~/jahuty-php-example $ php artisan serve
```

This should produce output similar to the following (the date, time, and PHP version may be different):

```bash
~/jahuty-php-example $ php artisan serve
Laravel development server started: http://127.0.0.1:8000
[Sun Jul 22 22:11:45 2020] PHP 7.2.5 Development Server (http://127.0.0.1:8000) started
```

Navigate to `http://localhost:8000`, and you should see the Laravel welcome screen:

![Laravel default welcome screen](https://github.com/jahuty/jahuty-php-example/blob/master/public/welcome.png)

The example application is up and running!

## Running the example

Now, it's time to run the default example.

Navigate to `http://localhost:8000/examples`, and you should see the following:

![Jahuty example](https://github.com/jahuty/jahuty-php-example/blob/master/public/example.png)

In this example, we're retrieving the "default" snippet (i.e., the snippet we control for system tests):

- We initialized our [PHP SDK](https://github.com/jahuty/jahuty-php) with our (public) [API key](https://www.jahuty.com/docs/api#authentication) at the top of the file (when you include Jahuty in your own application, we recommend setting Jahuty's API key on startup); and,
- We used the SDK to retrieve the snippet with an `id` of 1 in `resources/views/examples/index.blade.php`.

## Customizing the example

Ready to use your own snippet?

If you haven't already, [sign up](https://www.jahuty.com/users/sign_up), confirm your email address, [create your organization](https://www.jahuty.com/docs/creating-an-organization), and [create a snippet](https://www.jahuty.com/docs/creating-a-snippet).

Replace the default API key in `resources/views/examples/index.blade.php` with your [organization's API key](https://www.jahuty.com/docs/managing-an-api-key):

```php
# resources/views/examples/index.blade.php
Jahuty::setKey("YOUR_API_KEY");
```

Replace the snippet `id` in `resources/views/examples/index.blade.php` with your snippet's `id`. You can find a snippet's `id` beside its name in [your snippet Dashboard](https://www.jahuty.com/users/sign_in):

```php
# resources/views/examples/index.blade.php
<?php echo Snippet::render(YOUR_SNIPPET_ID); ?>
```

Refresh the page, and you should see your snippet's content in the document!

If you have questions, try [our documentation](https://www.jahuty.com/docs) or feel free too [ask us a question](https://www.jahuty.com/contacts/new).

We hope you enjoy using [Jahuty](https://www.jahuty.com) to stop worrying about content changes, and we're excited to partner with you!
