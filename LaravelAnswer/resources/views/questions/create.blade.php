
@extends('layouts.template')

@section('content')


<div class="container">
    <h1>Ask a Questions</h1>
    <hr />
    <form action="{{ route('question.store') }}" method="POST">
        @csrf
      <label for="title">Question:</label>
      <input type="text" name="title" id="title" class="form-control" />

      <label for="description">More Information:</label>
      <textarea class="form-control" name="description" id="description" rows="4"></textarea>

      <input type="submit" class="btn btn-primary" value="Submit Question" />
    </form>
</div>


@endsection
