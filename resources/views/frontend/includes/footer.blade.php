<footer class="footer-color container-fluid pt-5">
    <div class="">
        <div class="row " style="--bs-gutter-x: 0px !important; margin-right:0px;">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <!-- <h4 class="footer-heading">समाचार</h4> -->
{{--                <ul class="list">--}}
{{--                    <li class="footer-heading">--}}
{{--                        <h4 class=""><a href="">समाचार</a></h4>--}}
{{--                    </li>--}}
{{--                    <li class="footer-heading"><a href="">समाज</a> </li>--}}
{{--                    <li class="footer-heading"><a href="">विचार/ब्लग</a> </li>--}}
{{--                    <li class="footer-heading"><a href="">साहित्य</a> </li>--}}
{{--                    <li class="footer-heading"><a href="">अन्तर्वार्ता</a> </li>--}}
{{--                    <li class="footer-heading"><a href="">खेलकुद़़</a> </li>--}}
{{--                    <li class="footer-heading"><a href="">जीवनशैली/स्वास्थ्य</a> </li>--}}
{{--                    <li class="footer-heading"><a href="">प्रवास</a> </li>--}}
{{--                    <li class="footer-heading"><a href="">अन्तर्राष्ट्रिय</a> </li>--}}
{{--                </ul>--}}
                    <div class="card">
                        <img src="https://merosamachar.com/wp-content/uploads/2021/09/name-logo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <!-- <h4 class="footer-heading">अनलाइनखबर</h4> -->
                <ul class="list">
                    <li class="footer-heading">
                        <h4 class=""><a href="">अनलाइनखबर</a></h4>
                    </li>
                    <li class="footer-heading"><a href="">हाम्रो टीम</a> </li>
                    <li class="footer-heading"><a href="">प्रयोगका सर्त</a> </li>
                    <li class="footer-heading"><a href="">विज्ञापन</a> </li>
                    <li class="footer-heading"><a href="">प्राइभेसी पोलिसी</a> </li>
                    <li class="footer-heading"><a href="">सम्पर्क</a> </li>

                </ul>
            </div>



            <div class="col-lg-3 col-md-3 col-sm-6">
                <!-- <h4 class="footer-heading">विजनेस</h4> -->
                <ul class="list">
                    <li class="footer-heading">
                        <h4 class=""><a href="">विजनेस</a></h4>
                    </li>
                    <li class="footer-heading"><a href="">बजार</a> </li>
                    <li class="footer-heading"><a href="">रोजगार</a> </li>
                    <li class="footer-heading"><a href="">बैँक / वित्त</a> </li>
                    <li class="footer-heading"><a href="">अटो</a> </li>
                    <li class="footer-heading"><a href="">सूचना-प्रविधि</a> </li>

                </ul>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-6">

                <ul class="list">
                    <li class="footer-heading">
                        <h4 class=""><a href="">मनोरञ्जन</a></h4>
                    </li>
                    <li class="footer-heading"><a href="">समाज</a> </li>
                    <li class="footer-heading"><a href="">ब्लोअप</a> </li>
                    <li class="footer-heading"><a href="">बलिउड / हलिउड</a> </li>
                    <li class="footer-heading"><a href="">भिडियो</a> </li>
                    <li class="footer-heading"><a href="">ताजा समाचार</a> </li>

                </ul>
            </div>

        </div>

    </div>
    <hr>

    <div class="footer-bottom">
        <div class="">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6 footer-text">
                    <ul class="">
                        <li>अध्यक्ष तथा प्रबन्ध निर्देशक</li>
                        <li>धर्मराज भुसाल</li>

                    </ul>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 footer-text">
                    <ul class="">
                        <li>प्रधान सम्पादकः</li>
                        <li>शिव गाउँले</li>
                    </ul>

                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 footer-text">
                    <ul class="">
                        <li>सूचना विभाग दर्ता नं.</li>
                        <li>{{$data['row']->pam_vat}}</li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 footer-text">
                    <ul class="">
                        <li>{{$data['row']->phone}}</li>
                        <li>{{$data['row']->gmail}}</li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</footer>
<!-- Optional JavaScript; choose one of the two! -->



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
