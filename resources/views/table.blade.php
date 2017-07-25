
@extends('layouts.master')
@section('main-content')
<table id="example2" class="table table-bordered table-hover" display:none>
    <caption class="text-center">
        <h3>List quizs</h3>
    </caption>
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Number</th>
            <th class="text-center">YEARD</th>
            <th class="text-center">Question</th>
            <th class="text-center">Category</th>
            <th colspan="2" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @if (count($quizs))
        @foreach ($quizs as $quiz)
        <tr class="">
            <td>{{ $quiz->quiz_id }}</td>
            <td>{{ $quiz->quiz_number }}</td>
            <td>{{ $quiz->quiz_year }}</td>
            <td>{{ $quiz->question }}</td>
            <td>{{ $quiz->category_main_id }}</td>
            
            <td><a href="{{-- {{ action('quizController@edit', ['id' => $quiz->id]) }} --}}" class="btn btn-app btn-info"><i class="fa fa-edit"></i></a></td>
            <td>
                {{--    {!! Form::open([
                'method' => 'DELETE',
                'action' => ['quizController@destroy', $quiz->id],
                ]) !!}
                {!! Form::submit('Delete', ['class' => 'form-control btn btn-danger']) !!}
                {!! Form::close() !!} --}}
            </td>
        </tr>
        @endforeach

        @else
        <h3>Nothing data</h3>
        @endif

    </tbody>
</table>
{{ $quizs->links() }}
@endsection