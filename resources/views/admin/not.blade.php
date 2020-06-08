@extends('layouts.master')


@section('title')

        Notification

@endsection



@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><h2> Notification </h2> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                     <th> Latitude </th>
                      <th> Longitude </th>
                     
                     </thead>
                     <tbody>
                         @foreach ($locations as $row)
                        <tr>
                            <td>{{ $row->Latitude }}</td>
                            <td>{{ $row->Longitude }}</td>
                            
                           
                            
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
                </div>
                </div>
                </div>
                </div>

     



         

@endsection


@section('scripts')

@endsection