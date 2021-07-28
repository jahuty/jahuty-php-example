@extends('layouts.default')

@section('content')
<?php
    $renders = $jahuty->snippets->allRenders('test', ['prefer_latest' => true]);

    echo $jahuty->snippets->render(1, ['prefer_latest' => true]);
    echo $jahuty->snippets->render(62, ['prefer_latest' => true]);
    echo $jahuty->snippets->render(102, ['prefer_latest' => true]);
?>
@stop
