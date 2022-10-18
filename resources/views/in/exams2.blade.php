@include('app.header') 
@include('app.navbar') 

<!-- Page Header Start -->
<div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">{{ $examType }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="{{ url('/exams') }}">Exams</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">{{ $examType }}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
    <script>
        const cars = new Array();
    </script>
@foreach ($data as $ex)
<div class="container-xxl py-6">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" style="max-width: 500px;">
                <div class="row row-cols-1 text-center">
                     <h4 class="text-primary mb-2">{{ $ex->question }}
                        <br><br></h4> 
                        <button type="button" class="btn btn-primary exbutton" 
                        id="{{ $ex->answer1 }}" onclick="check('{{ $ex->answer1 }}','{{ $ex->correctAnswer }}',
                        '{{ $ex->answer2 }}','{{ $ex->answer3 }}','{{ $ex->answer4 }}')">
                           {{ $ex->answer1 }}
                       </button>
                        <button type="button" class="btn btn-primary exbutton"
                        id="{{ $ex->answer2 }}" onclick="check('{{ $ex->answer2 }}','{{ $ex->correctAnswer }}',
                        '{{ $ex->answer1 }}','{{ $ex->answer3 }}','{{ $ex->answer4 }}')">
                           {{ $ex->answer2 }}
                       </button>
                        <button type="button" class="btn btn-primary exbutton"
                        id="{{ $ex->answer3 }}" onclick="check('{{ $ex->answer3 }}','{{ $ex->correctAnswer }}',
                        '{{ $ex->answer1 }}','{{ $ex->answer2 }}','{{ $ex->answer4 }}')">
                           {{ $ex->answer3 }}
                       </button>
                       <button type="button" class="btn btn-primary exbutton"
                       id="{{ $ex->answer4 }}" onclick="check('{{ $ex->answer4 }}','{{ $ex->correctAnswer }}',
                       '{{ $ex->answer1 }}','{{ $ex->answer2 }}','{{ $ex->answer3 }}')">
                           {{ $ex->answer4 }}
                       </button>     
            </div>
        </div>      
    </div>
</div>
<script>
    // const cars = new Array();
     function hi(){
        window.alert(cars);
     }
    function check(value,answer,one,two,three){
           if(value === answer){
        cars.push(value);
           }
        const answer1 = document.getElementById(one);
        const answer2 = document.getElementById(two);
        const answer3 = document.getElementById(three);
        const wrong = document.getElementById(value);

        answer1.disabled = true;
        answer2.disabled = true;
        answer3.disabled = true; 
        wrong.disabled = true; //setting button state to disabled

        const correct = document.getElementById(answer);
        wrong.style.backgroundColor = 'red';
        correct.style.backgroundColor = 'green';

    }
    
 </script> 
@endforeach

<div class="container-xxl py-10">
    <div class="container">
        <div class="row g-4 justify-content-center" >
            <div class="col-lg-10 my-6 mb-0 wow fadeInUp">
                <div class="row row-cols-1 text-center">
                <p id="demo" style="visibility: hidden;"></p>
                </div>
                <div class="row row-cols-3 text-center">
                    
                    <h5><a class="col btn btn-primary w-100 py-3" href="{{ url('/exams') }}">
                       Back to Exams</a></h5>

                    <h5><button class="col btn btn-primary w-100 py-3" onclick="showElem()"
                        >View Results</button></h5>

                    <form method="POST" action="{{ route('exam') }}">
                        @csrf
                        <h5><button type="submit" class="col btn btn-primary w-100 py-3">
                            Try again</button></h5>
                        <input type="text" value="{{ $examType }}" name="examType" style="visibility: hidden;">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function showElem() {
    document.getElementById("demo").style.visibility = "visible"; 
    document.getElementById("demo").innerHTML = cars.length+" questions you answered correctly";
  }
</script>

@include("app.footer")