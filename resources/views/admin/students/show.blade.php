@extends('admin.layouts.app')
@section('content')
    <div class="grid_10">
        <div class="box round first grid">
            <h2>{{ __('Classes List of student:') }}
                @if (isset($classes[0]))
                    {{ $classes[0]->student_name }}
                @endif
            </h2>
            <div class="block">
                <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>{{ __('Class Name') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classes as $key => $class)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $class->name }}</td>
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
