@extends('admin.layouts.app')
@section('content')
    <div class="grid_10">
        <div class="box round first grid">
            <h2>{{ __('Class List') }}</h2>
            <div class="block">
                <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th>{{ 'ID' }}</th>
                            <th>{{ __('Name') }}</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classes as $key => $class)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td><a href="{{ route('classes.show', ['class' => $class]) }}">{{ $class->name }}</a>
                                </td>
                                <td>
                                    <form style="display: flex; justify-content: center"
                                        action="{{ route('classes.edit', ['class' => $class]) }}" method="GET">
                                        <button type="submit" class="btn btn-warning btn-sm">{{ __('Update') }}</button>
                                        @csrf
                                    </form>
                                </td>
                                <td>
                                    <form style="display: flex; justify-content: center"
                                        action="{{ route('classes.destroy', ['class' => $class]) }}" method="POST">
                                        @method('DELETE')
                                        <button type="submit" onclick=" return confirm('{{ __('Delete student mess') }}')"
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
