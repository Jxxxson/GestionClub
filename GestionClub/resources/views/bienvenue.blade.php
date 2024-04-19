@extends("layout.master")
@section('content')
    <!-- Start project here -->
    <div class="container">
        <div class="row">

            <!-- Colonne pour l'image -->
            <div class="col-md-3">
                <div class="view overlay hm-white-light z-depth-1-half">
                    <img class="imageDia" src="{{asset('image/logoDiademe.png')}}" alt="Logo lycée Diadème" >
                </div>
                <br>
            </div>

            <!-- Colonne pour le texte -->
            <div class="col-md-9">
                <h2 class="h2-responsive">Lycée Diadème, Te Tara O Maiao (Pirae)</h2>
                <hr>
                <p>Bienvenue sur cette page faite avec Laravel. Ce projet est en actuellement en cours .</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dignissim nisi sit amet justo
                    condimentum, ut eleifend arcu malesuada. Quisque suscipit lorem in nisi vulputate, quis rhoncus elit
                    sollicitudin. Vestibulum dapibus urna eu neque ullamcorper, eget ultricies ex dignissim. Proin eu
                    libero sit amet eros cursus sollicitudin. Cras eget libero nec urna dignissim scelerisque. Sed
                    auctor velit ut justo efficitur, quis tempus turpis vestibulum. Suspendisse in justo nec nisi
                    sagittis lacinia. Integer fermentum dui eget metus lobortis, vitae maximus elit luctus. Vivamus
                    vitae mi sed risus pharetra fermentum. Vivamus non leo et magna consequat vehicula. Sed nec lectus
                    eget lorem ultricies molestie. Curabitur ultrices metus vitae mauris lobortis, eget fermentum justo
                    ullamcorper. Vivamus bibendum consequat turpis, vitae consectetur nunc rhoncus vitae. Nunc tincidunt
                    risus nec posuere fermentum.
                </p>

                <a href="https://lycee2pirae.com/" class="btn btn-primary">Plus d'info!</a>
            </div>
        </div>
    </div>
@endsection
