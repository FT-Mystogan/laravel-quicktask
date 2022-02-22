@extends('layouts.app')
@section('content')
    <div class="grid_10">
        <div class="box round first grid">
            <h2> {{ __('Students list of class:') }}
                @if (isset($students[0]))
                    {{ $students[0]->class_name }}
                @endif
            </h2>
            <div class="block">
                <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th>{{ 'ID' }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Gender') }}</th>
                            <th>{{ __('Age') }}</th>
                            <th>{{ __('Address') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $key => $student)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $student->name }}</a></td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->age }}</td>
                                <td>{{ $student->address }}</td>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            setupLeftMenu();
            $('.datatable').dataTable();
            setSidebarHeight();
        });
    </script>
@endsection
