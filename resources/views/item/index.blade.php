@extends('layouts.main')
@section('content')
    <a href="{{route('item.create')}}" class="btn btn-primary">
        Create
    </a>


    <table class="table">
        <thead>
            <tr>
                <td>
                    #
                </td>

                <td>
                    Item
                </td>

                <td>
                    Qty
                </td>

                <td>
                    Price
                </td>

                <td>
                    Actions
                </td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>
                    1
                </td>

                <td>
                    Laptop
                </td>

                <td>
                    1
                </td>

                <td>
                    10000
                </td>

                <td>
                    <a href="" class="btn btn-primary btn-sm">
                        Edit
                    </a>

                    <a href="" class="btn btn-success btn-sm">
                        Delete
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
