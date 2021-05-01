@extends('layouts.default')

@section('content')
<?php
    $renders = $jahuty->snippets->allRenders('test', [
        'prefer_latest_content' => true
    ]);

    echo $jahuty->snippets->render(1);
    echo $jahuty->snippets->render(62);
    echo $jahuty->snippets->render(102);
?>
@stop
