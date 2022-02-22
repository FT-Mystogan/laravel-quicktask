@extends('admin.layouts.app')
@section('content')
    <div class="grid_10">
        <div class="box round first grid">
            <h2>{{ __('Student List') }}</h2>
            <div class="block">
                <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th>{{ 'ID' }} </th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Gender') }}</th>
                            <th>{{ __('Age') }}</th>
                            <th>{{ __('Address') }}</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $key => $student)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td><a
                                        href="{{ route('students.show', ['student' => $student]) }}">{{ $student->name }}</a>
                                </td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->age }}</td>
                                <td>{{ $student->address }}</td>
                                <td>
                                    <form style="display: flex; justify-content: center"
                                        action="{{ route('students.edit', ['student' => $student]) }}" method="GET">
                                        <button type="submit" class="btn btn-warning btn-sm">{{ __('Update') }}</button>
                                        @csrf
                                    </form>
                                </td>
                                <td>
                                    <form style="display: flex; justify-content: center"
                                        action="{{ route('students.destroy', ['student' => $student]) }}" method="POST">
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('{{ __('Delete student mess') }}')"
                                            class="btn btn-warning btn-sm">{{ __('Delete') }}</button>
                                        @csrf
                                    </form>
                                </td>
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
