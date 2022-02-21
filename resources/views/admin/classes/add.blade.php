@extends('layouts.app')
@section('content')
    <div class="grid_10">
        <div class="box round first grid">
            <h2> {{ __('Add New Class') }} </h2>
            @if (isset($data))
                <div class="alert alert-danger">
                    <h3>
                        {{ $data }}
                    </h3>
                </div>
            @endif
            <div class="block copyblock">
                <form action="{{ route('classes.store') }}" method="post" id="form-1">
                    <table class="form">
                        <tr>
                            <td>
                                <input type="text" placeholder={{ __('Enter Class Name...') }} class="medium"
                                    name="name" id="name" />
                                @error('name')
                                    <span style="color: red">{{ $message }}</span>
                                @enderror
                            </td>
                        </tr>
                        @csrf
                        <tr>
                            <td>
                                <input type="submit" name="submit" Value="{{ __('Save') }}" />
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection
