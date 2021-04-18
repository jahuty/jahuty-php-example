@extends('layouts.default')

@section('content')
<p class="lead">
    Welcome to Jahuty's example PHP application using Laravel.
</p>
<ul>
    <li>
        <a class="text-decoration-none" href="<?php echo route('examples.snippet'); ?>">Rendering a snippet</a>
    </li>
    <li>
        <a class="text-decoration-none" href="<?php echo route('examples.snippet-from-cache'); ?>">Rendering a snippet from the cache</a>
    </li>
    <li>
        <a class="text-decoration-none" href="<?php echo route('examples.snippet-with-params'); ?>">Rendering a snippet with parameters</a>
    </li>
    <li>
        <a class="text-decoration-none" href="<?php echo route('examples.snippets'); ?>">Rendering a collection of snippets</a>
    </li>
    <li>
        <a class="text-decoration-none" href="<?php echo route('examples.snippets-from-cache'); ?>">Rendering a collection of snippets from the cache</a>
    </li>
    <li>
        <a class="text-decoration-none" href="<?php echo route('examples.snippets-with-params'); ?>">Rendering a collection of snippets with params</a>
    </li>
</ul>
<div class="mt-4 pt-4 border-top small text-muted">
    <p>
        We made the following changes to a base Laravel installation:
    </p>
    <ol>
        <li>
            We added our API key to <code>config/jahuty.php</code>.
        </li>
        <li>
            We created a service provider, <code>JahutyProvider</code>, to register our service and to share the service instance, <code>$jahuty</code>, with all views.
        </li>
        <li>
            We registered our service provider with the app in <code>config/app.php</code>.
        </li>
        <li>
            We registered routes for our examples in <code>routes/web.php</code>.
        </li>
        <li>
            We created an <code>ExamplesController</code> with separate actions for each example.
        </li>
        <li>
            We created the default layout in <code>layouts/default.blade.php</code>.
        </li>
        <li>
            We created separate views for each example in <code>resources/views/examples</code>.
        </li>
    </ol>
</div>
@stop
