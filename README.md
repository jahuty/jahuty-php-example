# jahuty-php-example

An example Laravel application with [Jahuty's PHP SDK](https://docs.jahuty.com/sdks/php).

## Checking your environment

Before you get started, let's make sure you have the correct version of PHP and Composer.

Verify you have PHP 7.4 or 8.0+ installed:

```bash
$ php -v
```

The command above should produce the following output (or a higher version):

```bash
PHP 8.0.3
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
[Sun Jul 22 22:11:45 2020] PHP 8.0.3 Development Server (http://127.0.0.1:8000) started
```

Navigate to `http://localhost:8000`, and you should see the Laravel welcome screen:

![Laravel default welcome screen](https://github.com/jahuty/jahuty-php-example/blob/master/public/welcome.png)

The example application is up and running!

## Running the example

Now, it's time to view the examples.

Navigate to `http://localhost:8000/examples`, and you should see the following:

![Jahuty example](https://github.com/jahuty/jahuty-php-example/blob/master/public/example.png)

## Customizing the examples

Our examples use snippets that we control. Of course, it's more fun if you use your own.

If you haven't already, [sign up](https://app.jahuty.com/sign-up), and we'll provision your account with an organization, an API key, and a welcome snippet.

Then, to use your snippets in the examples:

1. _Change the API key._ Open `config/jahuty.php` and replace our API key with yours.
1. _Change the snippet id._ Open `resources/views/examples/snippet.blade.php` and replace our snippet id with yours.

Refresh the page, and you should see your snippet's content in the document!

## That's it!

If you have questions, try [our documentation](https://docs.jahuty.com) or feel free too [ask us a question](https://www.jahuty.com/contact).

We hope you enjoy using [Jahuty](https://www.jahuty.com) to save your team tons of time, and we're excited to partner with you!
