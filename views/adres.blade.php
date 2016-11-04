@extends('layout')

@section('content')

            <div class="box box-primary">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="data-table table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Sorteer</th>
                            <th>Emailadres</th>
                            <th>Huisadres</th>
                            <th>Postcode</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($adress))
                            @foreach ( $adress as $rows ) 
                                <tr>
                                    <td>
                                        {{$rows['Name']}}
                                    </td>
                                    <td>
                                        {{$rows['Email_adress']}}
                                    </td>
                                    <td>
                                        {{$rows['Home_adress']}}
                                    </td>
                                    <td>
                                        {{$rows['Zip_code']}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                 </table>
            </div>

@endsection