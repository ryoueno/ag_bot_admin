@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table">
                       @forelse($lectures as $lecture)
                            <tr>
                                <td>
                                    <td>
                                        <a href="{{ route('lecture.show', [$lecture->id]) }}">
                                            {{ $lecture->name }}
                                        </a>
                                    </td>
                                </td>
                            </tr>
                        @empty
                            <tr><td>登録されていません</td></tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
