@extends('layouts.default')

@section('content')
    <?php
        // Send an initial request to "warm" the in-memory cache.
        $jahuty->snippets->render(1);

        // Subsequent requests to render the same snippet with the same params
        // will use the cached value.
        echo $jahuty->snippets->render(1);

        echo $jahuty->snippets->render(1);
    ?>
@stop
