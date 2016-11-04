@extends('Backend/menu')

@section('content_backend')

<h1>Adressenlijst</h1>

<div class="row">
    <div class="col-xs-12">
            <div class="row">
                <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
                    <a href="create_adress.php" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
                        <i class="fa fa-pencil"></i> Nieuwe adres
                    </a>
                </div>
            </div>

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
                            <th>Gemaakt in</th>
                            <th>Aangepast in</th>
                            <th data-sortable="false">Acties</th>
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
                                    <td>
                                    	{{$rows['Created_at']}}
                                    </td>
                                    <td>
                                    	{{$rows['Edited_at']}}
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="Edit_adress.php?id={{$rows['ID']}}" class="btn btn-default btn-flat"><i class="fa fa-pencil"></i></a>
                                            <a href="Delete_adress_action.php?id={{$rows['ID']}}&events_id={{$rows['events_id']}}" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                 </table>
            </div>
        </div>
    </div>
</div>

@endsection