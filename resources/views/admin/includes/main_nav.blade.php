 <!--nav bar-->
 <nav class="navbar navbar-expand-md ">
        <!--toggler button-->
          <button class="navbar-toggler ml-auto mb-2 bg-white" type="button" data-toggle="collapse" data-targer="#navbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbar">
            <div class="container-fluid">
              <div class="row">
                <!-- including sidebar -->
                  @include('admin.includes.side_nav')

                <!-- including top navbar -->
                  @include('admin.includes.top_nav')
              </div>
            </div>
          </div>
      </nav>