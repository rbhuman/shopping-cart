@extends('shared.shared')
@section('css')


@endsection

@section('content')

               <div class="container">
<br><br>
					<div class="row">
                    	<div class="col-md-10 col-lg-9 p-b-50">
						     @if(count($files)>0)
                                       <table class="table table-responsive  table-striped">
										<tr>
                                            <th>SN</th>
											<th>Product Name</th>
											<th>Product Picture</th>
											<th>Updated date</th>
                                            <th >File Name(1)</div></th>
											<th>Action</th>
                                            <th>File Name(2)</th>
                                            <th>Action</th>
                                        </tr>
										 
										@foreach($files as $key =>$file)
										
                                         <tr>
											<td style="font-size:12px">{{$key + 1}}</td>
											<td style="font-size:12px">{{$file->product->name}}</div></td>
											<td><img src="{{Storage::url($file->product->image)}}" style="height:60px; width:75px;"/></td>
											<td style="font-size:12px">{{$file->created_at->format('m/d/Y')}}</td>
											<td style="font-size:12px">{{$file->filename1 }}</td>
												
											<td>
											<a href="/storage/files/{{$file->file1}}" download ="{{$file->file1}}"><button type="button" class="  btn btn-primary btn-sm"> Download</button></a>
											</td>
											<td style="font-size:12px"> {{$file->filename2}}</td>
										
										   <td>
										   <a href="/storage/files/{{$file->file2}}" download = "{{$file->file2}}"><button type="button" class="  btn btn-primary  btn-sm"> Download</button></a>
										   </td>
										</tr> 	   
										@endforeach
                                    </table>
                                         @else{{'No file for this product'}}
                                          
                                         @endif
                                     
								</div>
							 </div>
                        
                        </div>
                       
	
@endsection


