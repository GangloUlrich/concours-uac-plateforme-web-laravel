@extends('composant.app')
@section('title','Foire aux Questions')
@section('content')


<div class="jumbotron question d-flex flex-column justify-content-center text-center text-white">
    <h1 class="text-black font-weight-bold"><span class="des">&nbsp</span>Foire aux questions ( FAQ) </h1>
   
</div> 
        <div class="container mb-4">
                         
            <div id="accordion">

                @foreach($questions as $question)
                    <div class="text-left">
                        <p class="mb-0 font-weight-bold"  data-toggle="collapse" data-target="#{!!  \Illuminate\Support\Str::words($question->libelle,1,'')!!}" aria-expanded="false" aria-controls="collapseOne">
                            {{$question->libelle}} <i class="fas fa-plus-circle faq"></i>

                        </p>


                        <p id="{!!  \Illuminate\Support\Str::words($question->libelle,1,'')!!}" class="collapse text-justify" aria-labelledby="headingOne" data-parent="#accordion">

                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </p>

                    </div>
                @endforeach
                
                <div class="text-left">
                    <p class="mb-0 font-weight-bold"  data-toggle="collapse" data-target="#a" aria-expanded="false" aria-controls="">
                        Collapsible Group Item Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid <i class="fas fa-plus-circle faq"></i>
                      
                    </p>
                 
              
                  <p id="a" class="collapse text-justify"  data-parent="#accordion">
                   
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </p>
                 
                </div>


                <div class="text-left">
                   
                    <p class="mb-0  collapsed font-weight-bold"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Collapsible Group Item Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid <i class="fas fa-plus-circle faq"></i>
                     
                    </p>
                
                  <p id="collapseTwo" class="collapse text-justify" aria-labelledby="headingTwo" data-parent="#accordion">
                   
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </p>
                 
                </div>


                <div class="text-left">
                  
                    <p class="mb-0 collapsed font-weight-bold"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Collapsible Group Item Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid  <i class="fas fa-plus-circle faq"></i>
                     
                    </p>
                 
                  <p  id="collapseThree" class="collapse text-justify" aria-labelledby="headingThree" data-parent="#accordion">
                   
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </p>
                </div>
                
            </div>
                       
        </div>


    <div class="container mb-4">
        <div class=" text-left ">
            <form action="#" method="post" class="" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="asking" class="font-weight-bold">Posez votre question ici</label>
                    <textarea class="form-control w-75" id="asking" name="asking" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-success a-border">Envoyer</button>

            </form>
        </div>

    </div>
@endsection