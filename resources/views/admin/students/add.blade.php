@extends('layouts.app')
@section('content')
    <div class="grid_10">
        <div class="box round first grid">
            <h2>{{ __('Add Student') }}</h2>
            @if (isset($data))
                <div class="alert alert-danger">
                    <h3>
                        {{ $data }}
                    </h3>
                </div>
            @endif
            <div class="block">
                <form action="{{ route('students.store') }}" method="post" id="form-1">
                    <table class="form">
                        <tr>
                            <td>
                                <label>{{ __('Name') }}</label>
                            </td>
                            <td>
                                <input type="text" placeholder="{{ __('Enter Student name...') }}" class="medium"
                                    name="name" id="name" />
                                @error('name')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>{{ __('Gender') }}</label>
                            </td>
                            <td>
                                <input type="text" placeholder="{{ __('Enter Gender..') }}" class="medium"
                                    name="gender" id="gender" />
                                @error('gender')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>{{ __('Age') }}</label>
                            </td>
                            <td>
                                <input type="text" placeholder="{{ __('Enter Age...') }}" class="medium"
                                    name="age" id="age" />
                                @error('age')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>{{ __('Address') }}</label>
                            </td>
                            <td>
                                <input type="text" placeholder="{{ __('Enter Address...') }}" class="medium"
                                    name="address" id="address" />
                                @error('address')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
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
