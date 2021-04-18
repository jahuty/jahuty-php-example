@extends('layouts.default')

@section('content')
    <?php
        // Render the collection of snippets with the tag "test".
        $renders = $jahuty->snippets->allRenders('test');

        // Output the first snippet in the collection.
        echo $renders[0];

        // Output the second. Keep in mind, this snippet expects two variables,
        // `foo` and `bar` which have not been passed, causing it to render
        // "" in their place.
        echo $renders[1];
    ?>
@stop
