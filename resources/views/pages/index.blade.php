@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                </ol>
          
                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="/storage/Madeira.jpg" alt="Μαδέρα στην Πορτογαλία" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Μαδέρα, Πορτογαλία</h3>
                        </div>
                    </div>
          
                    <div class="item">
                        <img src="/storage/Francis Beidler Forest.jpg" alt="Δάσος στην Ν.Καρολίνα" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Francis Beidler Forest στην Ν.Καρολίνα, ΗΠΑ</h3>
                        </div>
                    </div>
          
                    <div class="item">
                        <img src="/storage/crete-agios-nikolaos.jpg" alt="Άγιος Νικόλαος στην Κρήτη" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Άγιος Νικόλαος, Κρήτη</h3>
                        </div>
                    </div>
              
                    <div class="item">
                        <img src="/storage/mountain.jpg" alt="Πεζοπορία στο βουνό" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Πεζοπορία στο βουνό</h3>
                        </div>
                    </div>

                    <div class="item">
                        <img src="/storage/nightlife-budapest.jpg" alt="Νυχτερινή Βουδαπέστη" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Νυχτερινή Βουδαπέστη με ποδήλατο</h3>
                        </div>
                    </div>

                    <div class="item">
                        <img src="/storage/australia.jpg" alt="Σκι στην Βικτώρια" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Σκι στην Βικτώρια, Αυστραλία</h3>
                        </div>
                    </div>
            
                </div>
          
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        
        <br><br>

        <h3>ΤΑΞΙΔΕΨΕ | ΑΝΑΚΑΛΥΨΕ | ΖΗΣΕ</h3>
        <p>Η φύση μάς καλεί να την ανακαλύψουμε όλες τις εποχές του χρόνου. Ένα μωσαϊκό τοπίων 
        με μοναδική βιοποικιλότητα και οικολογική αξία ξεδιπλώνεται μπροστά μας: σε εθνικά πάρκα, 
        ποτάμια, καταρράκτες, λίμνες, υδροβιότοπους, οροσειρές και ηφαίστεια. Θα ανακαλύψετε πόσα πολλά 
        μπορεί να κρύβονται στον μικρό πλανήτη μας. Παράλληλα στο ανέγγιχτο από τον άνθρωπο φυσικό 
        περιβάλλον προσφέρονται δραστηριότητες, όπως περπάτημα, ιππασία, οδήγηση off road, ράφτινγκ, 
        καγιάκ, αναρρίχηση, ορειβασία ή canyoning.</p>
    </div>
@endsection