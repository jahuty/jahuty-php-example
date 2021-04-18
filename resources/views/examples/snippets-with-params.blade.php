@extends('layouts.default')

@section('content')
<?php
    // Render the collection of snippets with the tag "test" and "warm" the
    // in-memory cache. Note the slightly different syntax for the "params"
    // option: the params are indexed by snippet id.
    $renders = $jahuty->snippets->allRenders('test', [
        'params' => [
            62 => [
                'foo' => 'foo',
                'bar' => 'bar'
            ]
        ]
    ]);

    echo $jahuty->snippets->render(1);
    
    echo $jahuty->snippets->render(62, [
        'params' => [
            'foo' => 'foo',
            'bar' => 'bar'
        ]
    ]);
?>
@stop
