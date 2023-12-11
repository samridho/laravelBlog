@extends('home.layout.userlayout')
 


@section('main')




      <!-- navbar end  -->



      <div class=" seccess_sosel_po  sodael_stiky">
                  
        <a href="#"><i class="bi bi-github"></i></a>
        <a href="#"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-youtube"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-whatsapp"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></a>
        
      </div>

      <div class="m_top"></div>


      <!-- main body start -->
      <main  >
        <div class="form_box ">
          <h6>contact us</h6>

          <form action="">
            <div class="input_box ">
              <label for="email"> email : </label>
              <input type="text" placeholder="enter your email" id="email">
            </div>
            <div class="input_box">
              <label for="text_area"> coment : </label>
              <textarea name="text_area" id="text_area" placeholder="enter your coment" ></textarea>
            </div>
            <div class="input-box">
            <button type="submit" class="btn btn_custom ">submit</button>

            </div>

          </form>
        </div>

        


      </main>


      <!-- main body end -->




       <!-- footer start  -->


    
@endsection


