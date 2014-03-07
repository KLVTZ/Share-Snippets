@extends('master')

@section('stylesheets')
	{{ HTML::style('code-prettify/prettify.css') }}
@endsection

@section('container')
	<pre class="prettyprint linenums">{{htmlentities($snippet)}}</pre>

	<div class='btn-group nav'>
		{{ link_to_route('fork_snippet', 'Fork', $id, array('class' => 'btn btn-warning')) }}
		{{ link_to_route('new_snippet', 'New', '', array('class' => 'btn btn-success')) }}
	</div>

@endsection

@section('scripts')
	{{ HTML::script('code-prettify/prettify.js') }}
	<script >prettyPrint();</script>
@endsection
