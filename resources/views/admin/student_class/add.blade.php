@extends('admin.layouts.app')
@section('content')
    <div class="grid_10">
        <div class="box round first grid">
            <h2>{{ __('Đăng ký lớp học') }}</h2>
            @if (isset($data))
                <div class="alert alert-danger">
                    <h3>
                        {{ $data }}
                    </h3>
                </div>
            @endif
            @include('admin.inc.alert')
            <div class="block">
                <form action="{{ route('student_class.store') }}" method="post" id="form-1">
                    <table class="form">
                        <tr>
                            <td>
                                <label>{{ __('Student Name') }} </label>
                            </td>
                            <td>
                                <select name="student">
                                    <option value="1">{{ __('Select Student') }} </option>
                                    @foreach ($students as $key => $student)
                                        <option value="{{ $student->id }}">{{ $student->name }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>{{ __('Class Name') }}</label>
                            </td>
                            <td>
                                <select name="class">
                                    <option value="1">{{ __('Select Class') }}</option>
                                    @foreach ($classes as $key => $class)
                                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        @csrf
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value={{ __('Save') }} />
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection
