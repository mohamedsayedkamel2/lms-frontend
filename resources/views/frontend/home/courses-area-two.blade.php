@php
    $courses = App\Models\Course::where('status',1)->where('featured',1)->orderBy('id','ASC')->limit(5)->get();

@endphp

<section class="course-area pb-90px">
    <div class="course-wrapper">
        <div class="container">
            <div class="section-heading text-center">
                <h5 class="ribbon ribbon-lg mb-2">Learn on your schedule</h5>
                <h2 class="section__title">Students are viewing</h2>
                <span class="section-divider"></span>
            </div><!-- end section-heading -->
            <div class="course-carousel owl-action-styled owl--action-styled mt-30px">


                @foreach ($courses as $course)
                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_3">
                    <div class="card-image">
                        <a href="{{ url('course/details/'.$course->id.'/'.$course->course_name_slug) }}" class="d-block">
                            <img class="card-img-top" src="{{ asset($course->course_image) }}" alt="Card image cap">
                        </a>

                        @php
                        $amount = $course->selling_price - $course->discount_price;
                        $discount = ($amount/$course->selling_price) * 100;
                    @endphp
                        <div class="course-badge-labels">
                            <div class="course-badge">Featured</div>
                            @if ($course->discount_price == NULL)
                            <div class="course-badge blue">New</div>
                            @else
                            <div class="course-badge blue">{{ round($discount) }}%</div>
                            @endif
                        </div>
                    </div><!-- end card-image -->



                   
                @endforeach



            </div><!-- end tab-content -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
</section><!-- end courses-area -->
