@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $lecture->name }}
                    <div class="text-right">教室番号：{{ $lecture->room_id }}</div>
                </div>

                <div class="panel-body">
                    <table class="table">
                       @forelse($attendances as $attendance)
                            <tr>
                                <td>
                                    <td>
                                        {{ $attendance->student_id }}
                                    </td>
                                </td>
                            </tr>
                        @empty
                            <tr><td>出席者はいません</td></tr>
                        @endforelse
                    </table>
                    <div class="panel-body">
                        <a href="{{ 'reset/' . $lecture->id }}">
                            <button class="btn btn-primary">出席者をリセット</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
