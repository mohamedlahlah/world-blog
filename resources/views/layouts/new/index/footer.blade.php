
    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <a href="{{route('blog')}}"><img src="{{asset('frontend/img/core-img/logo.png')}}" alt=""></a>
                        <div class="copywrite-text mt-30">
                            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">Mohamed lahlah</a>
</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li><a href="{{route('blog')}}">Home</a></li>
                            <li><a href="{{url('/about-us')}}">Categories</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{url('/about-us')}}">Contact</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <h5>Subscribe</h5>

                        <form action="{{route('submitemail')}}" method="post">
                         {{csrf_field()}}
                            <input type="email" name="email" id="email" placeholder="Enter your mail">
                            <input type="hidden" name="_method" value="PUT">
                            <button type="submit"><i class="fa fa-arrow-right"></i></button>
                     

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('frontend/js/active.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
var submitemailsuccessfully = "<?php if(session()->has('stats'))echo 'ok' ?>";
   if (submitemailsuccessfully.toString()) {
  Swal.fire({
  position: 'top-center',
  type: 'success',
  title: 'You Have Been Successfully Subscribed',
  showConfirmButton: false,
  timer: 3500

})
}
</script>
<?php session()->forget('stats'); ?>

</body>

</html>