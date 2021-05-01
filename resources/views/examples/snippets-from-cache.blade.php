@extends('layouts.default')

@section('content')
    <?php
        // Render the collection of snippets with the tag "test" and "warm" the
        // in-memory cache.
        $jahuty->snippets->allRenders('test');

        // Subsequent calls to render a snippet in the collection with the same
        // parameters (none in this case) will use the cached value.
        echo $jahuty->snippets->render(1);
        echo $jahuty->snippets->render(62);
        echo $jahuty->snippets->render(102);
    ?>
@stop
