@extends('layouts.default')

@section('content')
    <?php
        // Use the "params" option to pass parameters into the snippet. This
        // snippet expects two parameters: "This {{ foo }} is {{ bar }}".
        echo $jahuty->snippets->render(62, [
            'params' => [
                'foo' => 'foo',
                'bar' => 'bar'
            ]
        ]);
    ?>
@stop
