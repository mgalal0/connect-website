
               
                        @foreach($projects as $project)
                            <div class="col-md-5">
                                <div class="pro-img " >
                                    <img src="{{asset($project::PATH.$project->image)}}" alt="{{$project->name}}">
                                </div>
                            </div>
                              @endforeach
                            

                   
           