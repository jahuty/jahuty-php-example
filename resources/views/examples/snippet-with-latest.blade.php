@extends('layouts.default')

@section('content')
    <?php
        // By default, Jahuty will render a snippet's _published_ content. To
        // render its _latest_ content, use the `prefer_latest_content` option.
        echo $jahuty->snippets->render(102, ['prefer_latest' => true]);
    ?>
@stop
