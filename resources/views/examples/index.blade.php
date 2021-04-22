@extends('layouts.default')

@section('content')
<p class="lead">
    Welcome to Jahuty's example PHP application using Laravel.
</p>
<p>
    This application includes the following examples:
</p>
<ul>
    <li>
        <a href="<?php echo route('examples.snippet'); ?>">Rendering a snippet</a>
    </li>
    <li>
        <a href="<?php echo route('examples.snippet-from-cache'); ?>">Rendering a snippet from the cache</a>
    </li>
    <li>
        <a href="<?php echo route('examples.snippet-with-params'); ?>">Rendering a snippet with parameters</a>
    </li>
    <li>
        <a href="<?php echo route('examples.snippets'); ?>">Rendering a collection of snippets</a>
    </li>
    <li>
        <a href="<?php echo route('examples.snippets-from-cache'); ?>">Rendering a collection of snippets from the cache</a>
    </li>
    <li>
        <a href="<?php echo route('examples.snippets-with-params'); ?>">Rendering a collection of snippets with params</a>
    </li>
</ul>
<p>
    These examples utilize the following "system test" setup:
</p>
<ul>
  <li>
    The "system test" <a href="https://docs.jahuty.com/components/organizations" target="_blank">organization</a> exists in Jahuty with an <a href="https://docs.jahuty.com/components/api-keys" target="_blank">API key</a>.
  </li>
  <li>
    The organization has two <a href="https://docs.jahuty.com/components/snippets" target="_blank">snippets</a>, <code>1</code>, a static phrase, and <code>62</code>, a phrase with two <a href="https://docs.jahuty.com/liquid/introduction" target="_blank">variables</a>: <code>foo</code> and <code>bar</code>.
  </li>
  <li>
    The organiation has a <a href="https://docs.jahuty.com/components/tags" target="_blank">tag</a>, <code>test</code>, which has been applied to both snippets.
  </li>
</ul>
<p>
    These examples use the following changes to a standard Laravel installation:
</p>
<ol>
    <li>
        We added our API key to <code>config/jahuty.php</code>.
    </li>
    <li>
        We created a service provider, <code>JahutyProvider</code>, to register our service and to share the service instance, <code>$jahuty</code>, with all views.
    </li>
    <li>
        We registered our service provider in <code>config/app.php</code>.
    </li>
    <li>
        We registered routes in <code>routes/web.php</code>.
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
    <li>
        We added HTTP tests in <code>tests/Feature/Http/ExamplesTest.php</code>.
    </li>
</ol>
@stop
