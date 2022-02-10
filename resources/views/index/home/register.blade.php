@component('index.layouts.content', [
    'title' => ' ثبت نام',
    'tabTitle' => ' ثبت نام',
    'breadcrumb' => [['title' => 'ثبت نام', 'class' => 'active']],
    ])


@slot('style')



<link data-minify="1" rel='stylesheet' id='elementor-post-2723-css'  href="{{ asset('telnum_files/post-52.css?ver=1631767702') }}"  type='text/css' media='all' />

<link data-minify="1" rel="stylesheet" id="elementor-post-2-css" href="{{ asset('telnum_files/post-2.css') }}"  type="text/css" media="all">

<link data-minify="1" rel='stylesheet' id='elementor-post-52-css'  href="{{ asset('telnum_files/post-52.css?ver=1631767702') }}"  type='text/css' media='all' />

<link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{ asset('telnum_files/fontawesome.min.css" type="text/css') }}"  media="all">
<link data-minify="1" rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{ asset('telnum_files/brands.min.css') }}"  type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="elementor-icons-fa-solid-css" href="{{ asset('telnum_files/solid.min.css') }}"  type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="elementor-icons-fa-regular-css" href="{{ asset('telnum_files/regular.min.css') }}"  type="text/css" media="all">
<script type="text/javascript" src="{{ asset('telnum_files/jquery.min.js.download" id="jquery-core-js') }}" ></script>
<script type="text/javascript" src="{{ asset('telnum_files/jquery-migrate.min.js.download" id="jquery-migrate-js') }}" ></script>
<script type="text/javascript" src="{{ asset('telnum_files/v4-shims.min.js.download" id="font-awesome-4-shim-js') }}" ></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<style>
    .container {
        max-width: 500px;
    }
    .reload {
        font-family: Lucida Sans Unicode
    }
</style>
@endslot



    <div data-elementor-type="wp-post" data-elementor-id="52" class="elementor elementor-52" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">



 @include('index.layouts.elementor.warp', [  'id' => '1'  ])




                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-6d431d8 elementor-section-boxed elementor-section-height-default elementor-section-height-default default-style"
                    data-id="6d431d8" data-element_type="section"
                    data-settings="{&quot;rt_color_sets&quot;:&quot;default-style&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-0cc4eaa"
                                data-id="0cc4eaa" data-element_type="column">
                                <div class="elementor-column-wrap">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-9c06592"
                                data-id="9c06592" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">


 @include('index.layouts.elementor.widget', [  'id' => '1'  ])

                                        <div class="elementor-element elementor-element-1720180 elementor-button-align-center elementor-widget elementor-widget-form"
                                            data-id="1720180" data-element_type="widget"
                                            data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                                            data-widget_type="form.default">
                                            <div class="elementor-widget-container">


                                                @include('index.layouts.form_errors')



                                                <form class="elementor-form" method="post"
                                                action="{{route('index.user.register.post')}}">
                                                @csrf
                                                    <div class="elementor-form-fields-wrapper elementor-labels-above">


                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-10 elementor-field-required">
                                                        </div>
                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-40 elementor-field-required">


                                                            <label> نام و نام خانوادگی</label>
                                                            <input size="1" type="text" name="name"
                                                                id="form-field-name"
                                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                                placeholder="نام و نام خانوادگی"
                                                                required="required" value="{{ old('name') }}"
                                                                aria-required="true">
                                                                <br>

                                                         </div>

                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-10 elementor-field-required">

                                                        </div>
                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-40 elementor-field-required">

                                                            <label> ایمیل </label>
                                                            <input size="1" type="email" name="email"
                                                                id="form-field-name"
                                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                                placeholder="لطفا ایمیل خود را وارد نمایید"
                                                                required="required" value="{{ old('email') }}"
                                                                aria-required="true">


                                                        </div>





                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-10 elementor-field-required">
                                                        </div>
                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-40 elementor-field-required">

                                                            <label>رمزعبور</label>

                                                            <input size="1" type="password" name="password"
                                                                id="form-field-name"
                                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                                placeholder="" value="{{ old('password') }}"
                                                                required="required" aria-required="true">


                                                                   <hr>
                                                         </div>

                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-10 elementor-field-required">

                                                        </div>
                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-40 elementor-field-required">
                                                            <label>تکرار رمزعبور</label>

                                                            <input size="1" type="password" name="password_confirmation"
                                                                id="form-field-name"
                                                                class="elementor-field elementor-size-sm  elementor-field-textual"
                                                                placeholder="" value="{{ old('password_confirmation') }}"
                                                                required="required" aria-required="true">
                                                        </div>











<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-10 elementor-field-required">

    <label> &nbsp;   </label>
    </div>


    <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-40 elementor-field-required">
    {{-- <input size="1" type="text"  class="elementor-field elementor-size-sm  elementor-field-textual" name="captcha" id="captcha" placeholder="کد کپچا"  required=""> --}}

    {!! NoCaptcha::renderJs() !!}
    {!! NoCaptcha::display() !!}
    </div>


    <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-40 elementor-field-required">




        {{-- <div class="captcha">
            <span>{!! captcha_img() !!}</span>
        <button type="button" class="btn btn-danger" class="reload" id="reload">
            &#x21bb;
        </button>
    </div> --}}
</div>













                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-20 elementor-field-required">

                                                        </div>



                                                        {{-- @method('PUT') --}}

                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-60 elementor-field-required">
                                                            <button type="submit"
                                                                class="elementor-button elementor-size-sm">
                                                                ثبت نام
                                                            </button>
                                                        </div>

                                                        <div
                                                            class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-20 elementor-field-required">

                                                        </div>





                                                    </div>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-a86bf05"
                                data-id="a86bf05" data-element_type="column">
                                <div class="elementor-column-wrap">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>




    <script type="text/javascript">
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: '../reload-captcha',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });

    </script>




    @slot('script')

    @endslot
@endcomponent
