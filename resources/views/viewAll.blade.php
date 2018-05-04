@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                </div>
                <div>
                    <table style="width:100%">
                            <tr>
                              <th>Token No</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              
                            </tr>
                            <?php foreach($user as $u){?>
                                <tr>
                                    <td align="justify">{{$u->id}}</td>
                                    <td>{{$u->name}}</td>
                                    <td>{{$u->email}}</td>
                                    <td>{{$u->phone}}</td>
                                    
                                  </tr>
                           
                            <?php }?>
                          </table>
               </div> 
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection
