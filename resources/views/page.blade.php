@extends('layouts.header')
@section('content')
<div class="page-section">
    <div class="row">
        <div class="col-md-9">
            <div class="page-breadcrumb">Home <span class="mx-2">/</span><span class="mx-2">Page</span></div>
            <div class="page-headline">At MIT, we revel in a culture of learning by doing. In 30 departments across five
                schools and one college, our students combine analytical rigor with curiosity, playful imagination, and
                an appetite for solving the hardest problems in service to society.</div>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row py-5 my-5">
        <div class="col-md-6 page-detail">Our undergraduates work shoulder to shoulder with faculty, tackle global
            challenges, pursue fundamental questions, and translate ideas into action. The lifeblood of the Institute’s
            teaching and research enterprise, our graduate students and postdocs represent one of the most talented and
            diverse cohorts in the world. From science and engineering to the arts, architecture, humanities, social
            sciences, and management, and interdisciplinary programs, we offer excellence across the board. We also
            pioneer digital education — like MITx — which offers flexible access to MIT-rigorous content for learners of
            all ages.</div>
        <div class="col-md-6 page-image">
            <img src="https://www.mit.edu/files/images/201807/MIT-Brain-Drug-Delivery-03.jpg" class="img-fluid" />
        </div>
    </div>
    <hr>

    <div class="row py-5 my-5">
        <div class="col-md-6 page-image">
            <img src="https://www.mit.edu/files/images/201807/MIT-Brain-Drug-Delivery-03.jpg" class="img-fluid" />
        </div>
        <div class="col-md-6 page-detail">Our undergraduates work shoulder to shoulder with faculty, tackle global
            challenges, pursue fundamental questions, and translate ideas into action. The lifeblood of the Institute’s
            teaching and research enterprise, our graduate students and postdocs represent one of the most talented and
            diverse cohorts in the world. From science and engineering to the arts, architecture, humanities, social
            sciences, and management, and interdisciplinary programs, we offer excellence across the board. We also
            pioneer digital education — like MITx — which offers flexible access to MIT-rigorous content for learners of
            all ages.</div>
    </div>
    <hr>
    @include('layouts.footer')
</div>
@endsection